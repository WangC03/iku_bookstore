<?php

use Illuminate\Support\Facades\Route;

Route::prefix('cart')->group(function () {
    Route::get('/', [App\Http\Controllers\CartController::class, 'list'])->name('cart.list');
    Route::post('/add', [App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
//    Route::post('/update', [App\Http\Controllers\CartController::class, 'update'])->name('cart.update');
    Route::post('/remove', [App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');
//    Route::post('/clear', [App\Http\Controllers\CartController::class, 'clear'])->name('cart.clear');
});
