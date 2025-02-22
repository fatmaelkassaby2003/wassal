<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

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
Route::get('/', function () {
    return view('home');
})->name('home1');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/resturant', function () {
    return view('resturant');
})->name('resturant');

Route::get('/select-res', function () {
    return view('select_res');
});

Route::get('/res2', function () {
    return view('res2');
});

Route::get('/res3', function () {
    return view('res3');
});

Route::get('/res4', function () {
    return view('res4');
});

Route::get('/res5', function () {
    return view('res5');
});

Route::get('/res6', function () {
    return view('res6');
});

Route::get('/basket', function () {
    return view('basket');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/product-1', function () {
    return view('products.1');
});
Route::get('/products', [ProductController::class, 'index'])->name('home');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update/{cartItem}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout')->middleware('auth');
Route::post('/checkout', [OrderController::class, 'placeOrder'])->name('checkout.place');

// routes/web.php
Route::post('/cart/update-quantity', [CartController::class, 'updateQuantity'])->name('cart.updateQuantity');
