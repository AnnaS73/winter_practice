<?php

use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('index');
});

Route::get('/products', [ProductController::class, 'products']);

Route::get('/contact', function () {
    return view('contact');
});
