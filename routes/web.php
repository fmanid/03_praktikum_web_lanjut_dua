<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');;


Route::get('/promotion',[App\Http\Controllers\PromotionController::class, 'promo'])->name('promotion');

Route::get('/product',[App\Http\Controllers\ProductController::class, 'produk'])->name('product');

Route::get('/contact',[App\Http\Controllers\ContactController::class, 'contact'])->name('contact');

