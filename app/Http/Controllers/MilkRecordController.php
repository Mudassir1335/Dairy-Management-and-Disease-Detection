<?php

namespace App\Http\Controllers;

use App\Models\milk_record;
use Illuminate\Http\Request;

class MilkRecordController extends Controller
{
    //
    public function showmilkrecord()
    {
        $data= milk_record::all();
        return view('milkrecords',['records'=>$data]);

    }
     
    public function addmilkrecord(Request $req)
    {
        $data=new milk_record;
        $data->date=$req->date;
        $data->cow_code=$req->ccode;
        $data->morning=$req->morning;
        $data->evening=$req->evening;
        $data->total=$data->morning+$data->evening;
        $data->reason=$req->reason;
        
        $data->save();
        return redirect('milkrecords');

    }
    
    public function deletemilkrecord($id)
    {
        $data=milk_record::find($id);
        $data->delete();
        return redirect('milkrecords');

    }

    public function updatemilkrecord(request $req)
    {
       
       $data=milk_record::find($req->id);
       $data->date=$req->date;
       $data->cow_code=$req->ccode;
       $data->morning=$req->morning;
       $data->evening=$req->evening;
       $data->total=$req->total;
       $data->reason=$req->reason;
       
       
       $data->update();
       return redirect('milkrecords');


    }
}
