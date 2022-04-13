<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


// Роуты магазина

Route::get('products/{slug}', [ShopController::class, 'product']);
Route::get('shop', [ShopController::class, 'shop']);
Route::get('/', [ShopController::class, 'index'])->name('index');

// Роуты для корзины

Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/destroy', [CartController::class, 'destroy'])->name('cart.destroy');
Route::post('/cart/delete', [CartController::class, 'delete'])->name('cart.delete');
Route::post('/cart/increment', [CartController::class, 'increment'])->name('cart.increment');
Route::post('/cart/decrement', [CartController::class, 'decrement'])->name('cart.decrement');
Route::get('cart', [CartController::class, 'cart'])->name('cart');


// авторизация

Auth::routes();

Route::get('/admin', function() {
    return view('home');
})->name('home')->middleware('auth');

// роуты для админ панели

Route::prefix('admin')->group(function () {
    Route::group(['middleware' => ['role:admin']], function () {
        Route::get('categories/tree', [CategoryController::class, 'tree'])
            ->name('categories.tree');
        Route::resource('categories', CategoryController::class);
        Route::resource('products', ProductController::class);
    });
});





