<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class WebController extends Controller
{
    
    function addproduct(Request $req)
    {
        $product=new Product;
       
        $file=$req->file('file');
        $extenstion= $file->getClientOriginalExtension();
        $filename=time().'.' .$extenstion;
        $file->move('uploads',$filename);
        $product->product_image=$filename;

    
        $product->product_name=$req->pname;
        $product->price=$req->pprice;
        $product->quantity=$req->quantity;
        $product->category=$req->category;
        $product->expirey_date=$req->date;
        
        $product->save();
        return redirect('products');

    }
    function showproduct()
    {
        $data= Product::all();
        return view('products',['products'=>$data]);

    }
    function delete($id)
    {
        $data=Product::find($id);
        $data->delete();
        return redirect('products');

    }
    function fetchdata($id)
    {
        $data= Product::find($id);
        return view('edit',['products'=>$data]);

    }
    function updateproduct(request $req)
    {
       
       $data=Product::find($req->id);
       $file=$req->file('file');
       $extenstion= $file->getClientOriginalExtension();
       $filename=time().'.' .$extenstion;
       $file->move('uploads',$filename);
       
       $data->product_image=$filename;
       $data->product_name=$req->pname;
       $data->price=$req->pprice;
       $data->quantity=$req->quantity;
       $data->category=$req->category;
       $data->expirey_date=$req->date;
       
       $data->save();
       return redirect('products');


    }
}
