<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
class expenseController extends Controller
{
    public function addExpense(Request $req){
        $exp=new expense;
       
        
          $exp->date=$req->date;
          $exp->expense_details=$req->expensedetail;
          $exp->expense_amount=$req->expenseamount;
          $exp->total_expenses=$req->totalexpense;
          $exp->save();
          return redirect('expenses');
    }
    public function deletexpense($id)
    {
        $data=expense::find($id);
        $data->delete();
        return redirect()->back();

    }
    public function showExpense()
    {
        $data= expense::all();
        return view('expenses',['expenses'=>$data]);

    }
    public function updateExpense(request $req , $id)
    {
       
       $exp=expense::find($id);
       
       $exp->date=$req->date;
       $exp->expense_details=$req->expensedetail;
       $exp->expense_amount=$req->expenseamount;
       $exp->total_expenses=$req->totalexpense;
       
       $exp->update();
       return redirect('expenses');


    }
}
