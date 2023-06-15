<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\employee;
use App\Models\animal_records;
use App\Models\managesale;
use App\Models\expense;
use App\Models\milk_record;

class DashboardController extends Controller
{
    public function index()
    {
       
        $totalProducts = Product::count();

        $totalEmployees = Employee::count();

        $totalAnimals = animal_records::count();

    //    sales
    $totalSales = managesale::sum('total');
    $sales = Managesale::select('date', 'total')->get();

       
    $labels = $sales->pluck('date');
    $data = $sales->pluck('total');
    // milk
    $totalmilk= milk_record::sum('total_price');
    $milkdate = milk_record::select('date', 'total_price')->get();

       
    $labelsmilk = $milkdate->pluck('date');
    $datamilk = $milkdate->pluck('total_price');
    // expenses
    $totalexpense= expense::sum('expense_amount');
    $expensedate =expense::select('date', 'expense_amount','expense_details')->get();

       
    $labelsexpense = $expensedate->pluck('date');
    $dataexpense = $expensedate->pluck('expense_amount');
    $expensedetails = $expensedate->pluck('expense_details');
  
    return view('dashboard', compact('totalProducts', 'totalEmployees', 'totalAnimals', 'totalSales','labels', 'data','labelsmilk','datamilk','labelsexpense','dataexpense','expensedetails'));
}



}