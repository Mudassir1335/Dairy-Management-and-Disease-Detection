<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\expense;
use App\Models\managesale;
use App\Models\ProfitLoss;
use App\Models\milk_record;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
 
use Illuminate\Http\Request;

class ProfitLossController extends Controller
{
   
public function generateReport()
{
    $profitByMonthAndYear = [];

    // Retrieve the distinct months and years from the milk_record table
    $monthsAndYears = milk_record::distinct()
        ->selectRaw('MONTH(date) as month, YEAR(date) as year')
        ->get();

    foreach ($monthsAndYears as $monthAndYear) {
        $month = $monthAndYear->month;
        $year = $monthAndYear->year;

        // Retrieve data for the specific month and year from each table
        $milkData = milk_record::whereMonth('date', $month)->whereYear('date', $year)
            ->get();
        $saleData = managesale::whereMonth('date', $month)
            ->whereYear('date', $year)
            ->get();
        $expenseData = expense::whereMonth('date', $month)
            ->whereYear('date', $year)
            ->get();
            

        // Calculate the monthly profit
        $totalMilk = $milkData->sum('total_price');
        $totalliter = $milkData->sum('total');
        $totalSale = $saleData->sum('total');
        $totalExpense = $expenseData->sum('expense_amount');
        $monthlyProfit = $totalMilk + $totalSale - $totalExpense;

        $formattedMonth = Carbon::create()->month($month)->format('F');

        $profitByMonthAndYear[] = [
            'month' => $formattedMonth,
            'year' => $year,
            'profit' => $monthlyProfit,
            'totalsale'=>$totalSale,
            'totalmilk'=>$totalMilk,
            'totalexpense'=>$totalExpense,
            'totalliter'=>$totalliter
        ];
    }

    return view('profit_loss_report', compact('profitByMonthAndYear'));
}


}

