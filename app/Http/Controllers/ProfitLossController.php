<?php

namespace App\Http\Controllers;

use App\Models\expense;
use App\Models\managesale;
use App\Models\ProfitLoss;
use App\Models\milk_record;
use Illuminate\Support\Facades\DB;
 
use Illuminate\Http\Request;

class ProfitLossController extends Controller
{
    //
    public function generateReport()
    {
        // Get total expenses
        $totalExpenses = expense::sum('expense_amount');

        // Get total sales revenue
        $totalRevenue = managesale::sum('total');

        // Calculate gross profit
        $grossProfit = $totalRevenue - $totalExpenses;
      
// Calculate total milk income
$totalMilkIncome = milk_record::sum(DB::raw('total * today_rate'));

        // Calculate net profit/loss
        $netProfit = $totalMilkIncome + $totalRevenue - $totalExpenses;

  // Get total milk
  $totalMilk = milk_record::sum('total');
    // Get the current date
    $currentDate = date('Y-m-d');
  
         // Store the profit and loss values in the profit_loss table
    $profitLoss = new ProfitLoss();
    $profitLoss->total_revenue = $totalRevenue;
    $profitLoss->total_expenses = $totalExpenses;
    $profitLoss->gross_profit = $grossProfit;
    $profitLoss->net_profit = $netProfit;
    $profitLoss->total_milk = $totalMilk;
    $profitLoss->total_milk_income = $totalMilkIncome;
    $profitLoss->save();
        // Return the profit and loss report view with the calculated values
        return view('profit_loss_report', compact('totalRevenue', 'totalExpenses', 'grossProfit','netProfit', 'totalMilk', 'totalMilkIncome', 'currentDate'));
}

    public function deletereport($id)
    {
        $data=ProfitLoss::find($id);
        $data->delete();
        return redirect('profit_loss_report');

    }
}

