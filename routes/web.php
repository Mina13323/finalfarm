<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
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
});

Route::get('/customer', function () {
    return view('customer');
})->middleware('auth')->name('customer.dashboard');

Route::get('/supplier', function () {
    return view('supplier');
})->middleware('auth')->name('supplier.dashboard');

Route::get('/veterinarian.', function () {
    return view('veterinarian.');
})->middleware('auth')->name('veterinarian..dashboard');

Route::get('/admin', function () {
    return view('admin');
})->middleware('auth')->name('admin.dashboard');

Route::post('/buy', 'App\Http\Controllers\TransactionController@buy');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
