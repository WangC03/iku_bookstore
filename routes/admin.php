<?php

use Illuminate\Support\Facades\Route;

// Admin web routes


Route::name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('index');
    Route::resource('genres', \App\Http\Controllers\GenreController::class);
    Route::resource('publishers', \App\Http\Controllers\PublisherController::class);
    Route::resource('authors', \App\Http\Controllers\AuthorController::class);

    Route::resource('books', \App\Http\Controllers\BookController::class);

    Route::prefix('users')->group(function () {
        Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
        Route::post('/update-role', [\App\Http\Controllers\UserController::class, 'updateRole'])->name('users.update-role')->middleware('role:super-admin');
    });

    Route::prefix('orders')->name('orders.')->group(function () {
        Route::get('/', [\App\Http\Controllers\OrderController::class, 'index'])->name('index');
//        Route::get('/{order}', [\App\Http\Controllers\OrderController::class, 'show'])->name('show');
        Route::post('/update-status', [\App\Http\Controllers\OrderController::class, 'updateStatus'])->name('update-status');
        Route::get('/export-invoice/{order}', [\App\Http\Controllers\OrderController::class, 'exportInvoice'])->name('export-invoice');
    });
});
