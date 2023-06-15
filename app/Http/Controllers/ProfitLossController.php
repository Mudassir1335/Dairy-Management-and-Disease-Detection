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

    $monthsAndYears = milk_record::distinct()
        ->selectRaw('MONTH(date) as month, YEAR(date) as year')
        ->get();

    foreach ($monthsAndYears as $monthAndYear) {
        $month = $monthAndYear->month;
        $year = $monthAndYear->year;

       
        $milkData = milk_record::whereMonth('date', $month)->whereYear('date', $year)
            ->get();
        $saleData = managesale::whereMonth('date', $month)
            ->whereYear('date', $year)
            ->get();
        $expenseData = expense::whereMonth('date', $month)
            ->whereYear('date', $year)
            ->get();
            
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

public function calculateProfit(Request $request)
{
    $startDate = $request->input('startDate');
    $endDate = $request->input('endDate');

    $startMonth = date('m', strtotime($startDate));
    $startYear = date('Y', strtotime($startDate));
    $endMonth = date('m', strtotime($endDate));
    $endYear = date('Y', strtotime($endDate));

    $milkData = milk_record::where(function ($query) use ($startMonth, $startYear, $endMonth, $endYear) {
        $query->whereYear('date', '>=', $startYear)
            ->whereMonth('date', '>=', $startMonth);
    })
    ->where(function ($query) use ($startMonth, $startYear, $endMonth, $endYear) {
        $query->whereYear('date', '<=', $endYear)
            ->whereMonth('date', '<=', $endMonth);
    })
    ->get();

    $saleData = managesale::where(function ($query) use ($startMonth, $startYear, $endMonth, $endYear) {
        $query->whereYear('date', '>=', $startYear)
            ->whereMonth('date', '>=', $startMonth);
    })
    ->where(function ($query) use ($startMonth, $startYear, $endMonth, $endYear) {
        $query->whereYear('date', '<=', $endYear)
            ->whereMonth('date', '<=', $endMonth);
    })
    ->get();

    $expenseData = expense::where(function ($query) use ($startMonth, $startYear, $endMonth, $endYear) {
        $query->whereYear('date', '>=', $startYear)
            ->whereMonth('date', '>=', $startMonth);
    })
    ->where(function ($query) use ($startMonth, $startYear, $endMonth, $endYear) {
        $query->whereYear('date', '<', $endYear)
            ->orWhere(function ($query) use ($startMonth, $startYear, $endMonth, $endYear) {
                $query->whereYear('date', '=', $endYear)
                    ->whereMonth('date', '<=', $endMonth);
            });
    })
    ->get();

    $totalMilk = $milkData->sum('total_price');
    $totalSale = $saleData->sum('total');
    $totalExpense = $expenseData->sum('expense_amount');
    $totalProfit = $totalMilk + $totalSale - $totalExpense;

    return $totalProfit;
}



}

