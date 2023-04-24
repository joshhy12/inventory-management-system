<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('products', 'ProductController');
Route::resource('purchases', 'PurchaseController');
Route::resource('sales', 'SaleController');

Route::get('categories', [CategoryController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/categories', function () {
        return view('categories.index');
    })->name('categories.index');

    Route::get('/products', function () {
        return view('products.index');
    })->name('products.index');

    Route::get('/purchases', function () {
        return view('purchases.index');
    })->name('purchases.index');

    Route::get('/sales', function () {
        return view('sales.index');
    })->name('sales.index');
});
