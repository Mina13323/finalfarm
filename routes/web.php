<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/customer', function () {
    return view('customer');
});

Route::get('/supplier', function () {
    return view('supplier');
});

Route::get('/veterinarian', function () {
    return view('veterinarian');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

