<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{

    public function __construct(
        private $genreModel = new Genre(),
        private $bookModel = new Book(),
        private $orderModel = new Order(),
    )
    {
        $genres = $this->genreModel->with('genres')->where('parent_id', null)->get();
        View::share(['genres' => $genres]);
    }

    //
    public function index()
    {
//        Session::put('cart', collect(['123']));
        $books = $this->bookModel->with(['genres', 'authors'])->orderByDesc('id')->paginate(10);
//        foreach ($books as $book) {
//            dd($book->genres->pluck('name')->join(', '));
//        }
        return view('index', compact('books'));
    }

    public function cart()
    {
        return view("cart.index");
    }

    public function checkout()
    {
        return view('checkout.index');
    }

    public function books()
    {
        $books = $this->bookModel->with(['genres', 'authors'])->orderByDesc('id')->paginate(9);
        return view('books.index', compact('books'));
    }

    public function bookDetail($slug)
    {
        try {
            $book = $this->bookModel->with(['genres', 'authors', 'language'])->where('slug', $slug)->firstOrFail();
            return view('books.detail', compact('book'));
        } catch (\Exception $e) {
            return redirect()->route('books.index');
        }
    }

    public function bookByGenre($slug)
    {
        try {
            $genre = $this->genreModel->where('slug', $slug)->firstOrFail();
            $books = $this->bookModel->with(['genres', 'authors'])->whereHas('genres', function ($query) use ($genre) {
                $query->where('genres.id', $genre->id);
            })->orderByDesc('id')->paginate(9);
            return view('books.index', compact('books'));
        } catch (\Exception $e) {
            return redirect()->route('books.index');
        }
    }

    public function myOrders()
    {
        try {
            $orders = $this->orderModel->with('orderDetails')->where('user_id', auth()->id())->orderByDesc('id')->paginate(10);
            return view('my-orders', compact('orders'));
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            abort(Response::HTTP_INTERNAL_SERVER_ERROR, $e->getMessage());
            return redirect()->route('index');
        }
    }
}
