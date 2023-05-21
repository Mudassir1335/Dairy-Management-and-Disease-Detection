<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\websiteController;
use App\Http\Controllers\animalController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AdminController;



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
Route::get('deleteproduct/{id}',[WebController::class,'deleteproduct']);
Route::get('edit/{id}',[WebController::class,'fetchdata']);
Route::post('editproduct',[WebController::class,'updateproduct']);


//  employee panel
Route::view('employees','employees');
 Route::post('employee',[EmployeeController::class,'addEmployee']);
Route::get('employees',[EmployeeController::class,'showEmployee']);
 Route::get('deleteEmployee/{id}',[EmployeeController::class,'deleteEmployee']);
 Route::post('editEmployee',[EmployeeController::class,'updateEmployee']);


// Admin  panel
Route::view('admins','admins');
Route::post('admin',[AdminController::class,'addAdmin']);
Route::get('admins',[AdminController::class,'showAdmin']);
Route::get('deleteadmin/{id}',[AdminController::class,'deleteadmin']);
Route::post('editAdmin',[AdminController::class,'updateAdmin']);




//Admin Manage Sales
Route::post('managesale',[websiteController::class,'managesale']);
Route::get('showsale',[websiteController::class,'showsale']);
Route::get('deletesale/{id}',[websiteController::class,'deletesales']);



// Ecommerce Website
Route::view('cart', 'cart');
Route::view('checkout', 'checkout');
Route::view('dashboard', 'dashboard');
Route::get('mainweb',[websiteController::class,'ShowProductWeb']);
Route::post('addcart',[websiteController::class,'AddToCart']);
Route::get('emptycart',[websiteController::class,'emptyCart']);
Route::get('delpro/{pid}',[websiteController::class,'delcartPro']);


// Manage Animals

Route::get('animals',[animalController::class,'showAnimals']);
Route::get('deleteanimal/{id}',[animalController::class,'deleteanimal']);
Route::post('addanimals',[animalController::class,'addanimal']);
Route::post('update-animal/{id}',[animalController::class,'updateanimal']);
Route::get('/get-all-animal-delivery-dates', [animalController::class,'getAllDeliveryDates']);




// Admin Category panel
Route::view('category','category');
Route::post('category',[CategoryController::class,'addcategory']);
Route::get('category',[CategoryController::class,'showcategory']);
Route::get('delete/{id}',[CategoryController::class,'delete']);
Route::get('edit/{id}',[CategoryController::class,'fetchdata']);
Route::post('edit',[CategoryController::class,'updateproduct']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function () {
    // Routes that require authentication
  
    // Add more authenticated routes here
});

