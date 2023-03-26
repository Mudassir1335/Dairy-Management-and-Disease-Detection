<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\websiteController;

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

// Admin Products panel
Route::view('products','products');
Route::post('product',[WebController::class,'addproduct']);
Route::get('products',[WebController::class,'showproduct']);
Route::get('delete/{id}',[WebController::class,'delete']);
Route::get('edit/{id}',[WebController::class,'fetchdata']);
Route::post('edit',[WebController::class,'updateproduct']);
//Admin Manage Sales
Route::post('managesale',[websiteController::class,'managesale']);
Route::get('showsale',[websiteController::class,'showsale']);

// Ecommerce Website
Route::view('cart', 'cart');
Route::view('checkout', 'checkout');
Route::view('dashboard', 'dashboard');
Route::get('mainweb',[websiteController::class,'ShowProductWeb']);
Route::post('addcart',[websiteController::class,'AddToCart']);
Route::get('emptycart',[websiteController::class,'emptyCart']);
Route::get('delpro/{pid}',[websiteController::class,'delcartPro']);



