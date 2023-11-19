<?php

namespace App\Http\Controllers;

use App\Jobs\SendInvoiceEmail;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    //

    public function __construct(
        private $model = new Order()
    )
    {
    }

    public function index()
    {
        $list = $this->model->with('orderDetails')->orderByDesc('id')->paginate(10);
//        dd($orders);
        return view('admin.orders.index', compact('list'));
    }

    public function store(Request $request)
    {
        try {
            $this->model->fill($request->all());
            $cart = session()->get('cart');
            $this->model->total = $cart->sum(function ($item) {
                return number_format($item['price'] * $item['quantity'], 2);
            });
            $this->model->user_id = auth()->user()->id ?? null;
            $this->model->status = 1;
            $this->model->save();
            $this->model->orderDetails()->createMany($cart->map(function ($item) {
                return [
                    'book_id' => $item['id'],
                    'quantity' => $item['quantity'],
                    'price' => $item['price'],
                ];
            })->toArray());
            session()->forget('cart');
            Mail::raw('Đặt hàng thành công', function ($message) use ($model) {
                $message->to($model->email, $model->name)
                    ->subject('Đặt hàng thành công. Mã đơn hàng: ' . $model->id);
            });
            return redirect()->route('index')->with('success', 'Đặt hàng thành công');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    public function updateStatus(Request $request)
    {
        try {
            $order = $this->model->findOrFail($request->id);
            $order->status = $request->status;
            $order->save();
            if ($order->status != 4) {
                $status = config('util.STATUS')[$order->status];
                Mail::raw("Xin chào {$order->name}, đơn hàng của bạn đã được cập nhật trạng thái thành {$status}", function ($message) use ($order, $status) {
                    $message->to($order->email, $order->name)
                        ->subject("[#{$order->id}] Cập nhật trạng thái đơn hàng");
                });
            } else {
                SendInvoiceEmail::dispatch($order)->delay(now()->addSeconds(10));
            }
            return response()->json([
                'status' => 'success',
                'message' => 'Cập nhật trạng thái đơn hàng thành công',
            ], Response::HTTP_OK);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json([
                'message' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function exportInvoice($order)
    {
        try {
            $order = $this->model->with('orderDetails')->findOrFail($order);
//            dd($order->orderDetails);
            $html = view('admin.mails.invoice', compact('order'))->render();
//            echo $html;
//            die;
//            dd($html);
            $pdf = PDF::loadHTML($html, 'UTF-8');
            return $pdf->download('invoice.pdf');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}
