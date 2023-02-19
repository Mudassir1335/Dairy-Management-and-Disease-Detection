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

Route::get('/', function () {
    return view('welcome');

});


Route::view('web', 'mainweb');
Route::view('cart', 'cart');
Route::view('checkout', 'checkout');

Route::view('dashboard', 'dashboard');
Route::view('products','products');



