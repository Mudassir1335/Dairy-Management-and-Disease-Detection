<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\File;
class WebController extends Controller
{
    
    public function addproduct(Request $req)
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
    public function showproduct()
    {
        $data= Product::all();
        return view('products',['products'=>$data]);

    }
    public function delete($id)
    {
        $data=Product::find($id);
        $data->delete();
        return redirect('products');

    }
    // function fetchdata($id)
    // {
    //     $data= Product::find($id);
    //     return view('edit',['products'=>$data]);

    // }
    public function updateproduct(request $req)
    {
       
       $data=Product::find($req->id);
       if($req->hasfile('product_image'))
        {
           
       $file=$req->file('file');
       $extenstion= $file->getClientOriginalExtension();
       $filename=time().'.' .$extenstion;
       $file->move('uploads',$filename);
        
       $data->product_image=$filename;
        }
       $data->product_name=$req->pname;
       $data->price=$req->pprice;
       $data->quantity=$req->quantity;
       $data->category=$req->category;
       $data->expirey_date=$req->date;
       
       $data->update();
       return redirect('products');


    }
    public function ShowProductWeb()
    {
        $data= Product::all();
        return view('mainweb',['products'=>$data]);

    }
    public function AddToCart(Request $req){

        $cart=session('cart'); 
        $cart[] =[ 
                
                    "name" => $req->name,
                    "price" => $req->price,
                    "quantity" => $req->quantity,
                    "pid"=>$req->pid,
                    "image"=>$req->image,
        ];
           

        session()->put('cart', $cart);

        return  redirect()->back();
    


    }
    public function emptyCart(){
        session()->forget('cart');

    return  redirect()->back();


    }
    public function delcartPro($id)
    {
        $products = session()->get('cart');
    foreach ($products as $index => $values) {
        if($values['pid'] == $id){
            unset($products[$index]);
        }
    }
    session()->put('cart', $products);
          return redirect()->back();
    }
}
