<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductSelectionController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', function () {
        return view('admin');
    })->name('admin.dashboard');

    Route::get('/customer', function () {
        return view('customer');
    })->name('customer.dashboard');

    Route::get('/supplier', function () {
        return view('supplier');
    })->name('supplier.dashboard');

    Route::get('/veterinarian', function () {
        return view('veterinarian');
    })->name('veterinarian.dashboard');
});
Route::post('/purchase', [ProductSelectionController::class, 'purchase'])->name('purchase');

Route::post('/customer/purchase', [ProductSelectionController::class, 'purchase'])->name('customer.purchase');

Route::post('/buy', 'App\Http\Controllers\TransactionController@buy');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/customer/products/select', [ProductSelectionController::class, 'select'])->name('customer.select_products');

Route::post('/customer/products/select', [ProductSelectionController::class, 'select'])->name('customer.select_products');

Auth::routes();
