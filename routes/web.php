<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\websiteController;
use App\Http\Controllers\animalController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\expenseController;
use App\Http\Controllers\MilkRecordController;
use App\Http\Controllers\DiagnoseController;
use App\Http\Controllers\ProfitLossController;


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

// Expense Management

Route::view('expenses','expenses');
Route::post('expense',[expenseController::class,'addExpense']);
Route::get('expenses',[expenseController::class,'showExpense']);
Route::get('deleteexpense/{id}',[expenseController::class,'deletexpense']);
Route::post('editExpense/{id}',[expenseController::class,'updateExpense']);

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


// Manage Milk Record
Route::view('milkrecords','milkrecords');
Route::get('milkrecords',[MilkRecordController::class,'showmilkrecord']);
Route::post('milkrecords',[MilkRecordController::class,'addmilkrecord']);
Route::get('deletemilkrecord/{id}',[MilkRecordController::class,'deletemilkrecord']);
Route::post('editmilkrecord',[MilkRecordController::class,'updatemilkrecord']);
Route::get('/check-milk-record', [MilkRecordController::class, 'checkMilkRecord'])->name('check.milk.record');
Route::post('/autocomplete/fetch', [MilkRecordController::class, 'fetch'])->name('autocomplete.fetch');
Route::post('/get-total-milk',[MilkRecordController::class,'getTotalMilk'])->name('get-total-milk');
Route::post('/get-total-sum', [MilkRecordController::class, 'getTotalSum']);

// Disease detection by Picture
Route::view('detectpic','detectpic');

//  Detect disease

Route::view('detection','detection');
Route::post('/diagnose', [DiagnoseController::class, 'diagnose'])->name('diagnose');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//  Profit AND  Losss


Route::view('detection1','detection1');

Route::get('/report', [ProfitLossController::class, 'generateReport']);
Route::get('delete/{id}',[ProfitLossController::class,'deletereport']);

