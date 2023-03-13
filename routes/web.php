<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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



Route::view('cart', 'cart');
Route::view('checkout', 'checkout');

Route::view('dashboard', 'dashboard');
Route::view('products','products');
Route::post('product',[WebController::class,'addproduct']);
Route::get('products',[WebController::class,'showproduct']);
Route::get('delete/{id}',[WebController::class,'delete']);
Route::get('edit/{id}',[WebController::class,'fetchdata']);
Route::post('edit',[WebController::class,'updateproduct']);
Route::get('mainweb',[WebController::class,'ShowProductWeb']);



