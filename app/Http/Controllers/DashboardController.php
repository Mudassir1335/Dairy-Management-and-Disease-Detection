<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\employee;
use App\Models\animal_records;
use App\Models\managesale;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Retrieve the total number of products
        $totalProducts = Product::count();

        $totalEmployees = Employee::count();

        $totalAnimals = animal_records::count();
        // Retrieve the total sales
    $totalSales = managesale::sum('total');

    // Pass the totalProducts, totalEmployees, totalAnimals, and totalSales variables to the dashboard view
    return view('dashboard', compact('totalProducts', 'totalEmployees', 'totalAnimals', 'totalSales'));
}
}