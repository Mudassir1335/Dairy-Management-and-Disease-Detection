<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class WebController extends Controller
{
    //
    function addproduct(Request $req)
    {
        $product=new Product;
        $product->product_name=$req->pname;
        $product->price=$req->pprice;
        $product->quantity=$req->quantity;
        $product->category=$req->category;
        $product->expirey_date=$req->date;
        $product->product_image=$req->img;
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
}
