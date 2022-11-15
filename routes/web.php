<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;

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


Route::get('/', [StoreController::class, 'welcome']);
Route::get('/store', [StoreController::class, 'store']);
Route::get('/cart', [StoreController::class, 'cart']);


Route::get('/{product:slug}', [ProductController::class, 'index']);
Route::get('/add_product', [ProductController::class, 'create'])->middleware('admin');
Route::post('/add_product', [ProductController::class, 'store'])->middleware('admin');

require __DIR__ . '/auth.php';
