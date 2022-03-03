<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('product/{id}', [ProductController::class, 'show'])
    ->name('product.show');

Route::resource('categories', CategoryController::class);



Auth::routes();

Route::get('/admin', function() {
    return view('home');
})->name('home')->middleware('auth');
