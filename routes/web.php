<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index']);
Route::resource('orders', \App\Http\Controllers\OrderController::class);
Route::get('/orders/report/{order}/{format}', [\App\Http\Controllers\OrderReportController::class, 'index']);
