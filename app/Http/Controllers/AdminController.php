<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;

class AdminController extends Controller
{
    public function addAdmin(Request $req)
    {
        $ad=new admin;
       
        $file=$req->file('adminpic');
        $extenstion= $file->getClientOriginalExtension();
        $filename=time().'.' .$extenstion;
        $file->move('uploads',$filename);
        $ad->admin_image=$filename;

    
        $ad->first_name=$req->fname;
        $ad->last_name=$req->lname;
        $ad->cnic=$req->cnic;
        $ad->email=$req->email;
        $ad->password=$req->password;
        
        $ad->save();
        return redirect('admins');

    }

    public function deleteadmin($id)
    {
        $data=admin::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function showAdmin()
    {
        $data= admin::all();
        return view('admins',['admins'=>$data]);

    }
    public function updateAdmin(request $req)
    {
       
       $ad=admin::find($req->id);
       if($req->hasfile('file'))
        {
           
       $file=$req->file('file');
       $extenstion= $file->getClientOriginalExtension();
       $filename=time().'.' .$extenstion;
       $file->move('uploads',$filename);
        
       $ad->admin_image=$filename;
        }
       $ad->first_name=$req->fname;
       $ad->last_name=$req->lname;
       $ad->cnic=$req->cnic;
       $ad->email=$req->email;
       $ad->password=$req->password;
       
       $ad->update();
       return redirect('admins');


    }


}
