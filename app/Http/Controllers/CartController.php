<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    //

    public function __construct(
        private $bookModel = new Book(),
        private $cartKey = 'cart',
    )
    {
    }

    public function list()
    {
        try {
//            Session::put($this->cartKey, collect([]));
            $cart = Session::get($this->cartKey, collect([]));
            return response()->json([
                'status' => 'success',
                'data' => $this->getCartData($cart),
            ], Response::HTTP_OK);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function add(Request $request)
    {
        try {
            $book = $this->bookModel->find($request->id);
            $cart = Session::get($this->cartKey);
            if (empty($cart)) {
                $cart = collect([]);
            }
            if ($cart->contains('id', $book->id)) {
                $cart->transform(function ($item) use ($book, $request) {
                    if ($item['id'] == $book->id) {
                        $item['quantity'] += $request->quantity;
                    }
                    return $item;
                });
            } else {
                $cart->push([
                    'id' => $book->id,
                    'title' => $book->title,
                    'price' => !empty($book->sale_price) ? $book->sale_price : $book->regular_price,
                    'image' => $book->external_url,
                    'slug' => $book->slug,
                    'quantity' => $request->quantity,
                ]);
            }
            Session::put($this->cartKey, $cart);
            return response()->json([
                'status' => 'success',
                'data' => $this->getCartData($cart),
            ], Response::HTTP_OK);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function remove()
    {
        try {
            $cart = Session::get($this->cartKey);
            $cart = $cart->filter(function ($item) {
                return $item['id'] != request()->id;
            });
            Session::put($this->cartKey, $cart);
            return response()->json([
                'status' => 'success',
                'data' => $this->getCartData($cart),
            ], Response::HTTP_OK);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    private function getCartData($cart)
    {
        $total = $cart->sum(function ($item) {
            return number_format($item['price'] * $item['quantity'], 2);
        });
        return [
            'cart' => $cart,
            'total' => $total,
            'count' => $cart->count(),
        ];
    }
}
