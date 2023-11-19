<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::prefix('cart')->name('cart.')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'cart'])->name('index');
});

Route::get('/checkout', [\App\Http\Controllers\HomeController::class, 'checkout'])->name('checkout');
Route::post('/order', [\App\Http\Controllers\OrderController::class, 'store'])->name('order.store');

Route::get('/books', [\App\Http\Controllers\HomeController::class, 'books'])->name('books.index');
Route::get('/books/detail/{slug}', [\App\Http\Controllers\HomeController::class, 'bookDetail'])->name('books.detail');
Route::get('/genres/{slug}', [\App\Http\Controllers\HomeController::class, 'bookByGenre'])->name('books.byGenre');
Route::get('my-orders', [\App\Http\Controllers\HomeController::class, 'myOrders'])->name('my-orders')->middleware('auth');
