<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
class EmployeeController extends Controller
{
      public function addEmployee(Request $req)
      {
        $employee=new employee;
       
        $file=$req->file('employeepic');
        $extenstion= $file->getClientOriginalExtension();
        $filename=time().'.' .$extenstion;
        $file->move('uploads',$filename);
        $employee->employee_image=$filename;


    
          $employee->first_name=$req->fname;
          $employee->last_name=$req->lname;
          $employee->cnic=$req->cnic;
          $employee->email=$req->email;
          $employee->salary=$req->salary;
          $employee->gender=$req->gender;
        
          $employee->save();
          return redirect('employees');

      }

      public function deleteEmployee($id)
      {
          $data=employee::find($id);
          $data->delete();
          return redirect()->back();

      }

      public function showEmployee()
      {
          $data= employee::all();
          return view('employees',['employees'=>$data]);

      }
      public function updateEmployee(request $req)
      {
       
        $employee=employee::find($req->id);
        if($req->hasfile('file'))
         {
           
        $file=$req->file('file');
        $extenstion= $file->getClientOriginalExtension();
       $filename=time().'.' .$extenstion;
       $file->move('uploads',$filename);
        
        $employee->employee_image=$filename;
         }
       $employee->first_name=$req->fname;
       $employee->last_name=$req->lname;
       $employee->cnic=$req->cnic;
        $employee->email=$req->email;
        $employee->salary=$req->salary;
        $employee->gender=$req->gender;
       
       $employee->update();
        return redirect('employees');


    }

}
