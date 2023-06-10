<?php

namespace App\Http\Controllers;

use App\Models\expense;
use App\Models\managesale;
use App\Models\ProfitLoss;
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

        // Get other income (if applicable)
        $otherIncome = 0; // Set to zero if not applicable

        // Get other expenses (if applicable)
        $otherExpenses = 0; // Set to zero if not applicable

        // Calculate net profit/loss
        $netProfit = $grossProfit + $otherIncome - $otherExpenses;

         // Store the profit and loss values in the profit_loss table
    $profitLoss = new ProfitLoss();
    $profitLoss->total_revenue = $totalRevenue;
    $profitLoss->total_expenses = $totalExpenses;
    $profitLoss->gross_profit = $grossProfit;
    $profitLoss->other_income = $otherIncome;
    $profitLoss->other_expenses = $otherExpenses;
    $profitLoss->net_profit = $netProfit;
    $profitLoss->save();
        // Return the profit and loss report view with the calculated values
        return view('profit_loss_report', compact('totalRevenue', 'totalExpenses', 'grossProfit', 'otherIncome', 'otherExpenses', 'netProfit'));
    }

    public function deletereport($id)
    {
        $data=ProfitLoss::find($id);
        $data->delete();
        return redirect('profit_loss_report');

    }
}

