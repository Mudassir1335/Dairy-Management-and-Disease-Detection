<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function addAdmin(Request $req)
    {
        $ad=new User;
       
       

    
        $ad->name=$req->fname;
       
        
        $ad->email=$req->email;
        $ad->password = Hash::make($req->password);
        
        $ad->save();
        return redirect('admins');

    }

    public function deleteadmin($id)
    {
        $data=User::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function showAdmin()
    {
        $data=User::all();
        return view('admins',['admins'=>$data]);

    }
   
    // public function updateAdmin(request $req)
    // {
       
    //    $ad=admin::find($req->id);
       
    //    $ad->first_name=$req->fname;
    //    $ad->last_name=$req->lname;
    //    $ad->cnic=$req->cnic;
    //    $ad->email=$req->email;
    //    $ad->password=$req->password;
       
    //    $ad->update();
    //    return redirect('admins');


    // }


}
