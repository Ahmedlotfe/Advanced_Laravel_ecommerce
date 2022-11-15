<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\CheckoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/', [StoreController::class, 'welcome']);
Route::get('/store', [StoreController::class, 'store'])->middleware('auth');
Route::get('/cart', [CartItemController::class, 'cart'])->middleware('auth');
Route::post('/add_cart/{product:slug}', [CartItemController::class, 'add_cart'])->middleware('auth');
Route::post('/remove_cart/{product:slug}', [CartItemController::class, 'remove_cart'])->middleware('auth');
Route::post('/remove_cart_item/{product:slug}', [CartItemController::class, 'remove_cart_item'])->middleware('auth');

Route::get('/checkout', [CheckoutController::class, 'checkout'])->middleware('auth');

Route::get('/add_product', [ProductController::class, 'create'])->middleware('admin');
Route::post('/add_product', [ProductController::class, 'store'])->middleware('admin');

Route::get('/{product:slug}', [ProductController::class, 'index'])->middleware('auth');
