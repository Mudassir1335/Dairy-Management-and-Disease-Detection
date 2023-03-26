<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Managesale;
use Illuminate\Support\Facades\Session;


class websiteController extends Controller
{
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
    public function showsale()
    {
        $data= Managesale::all();
        return view('managesale',['products'=>$data]);

    }
    public function managesale(request $req)
    {
       

        foreach(session('cart') as $pid => $details){
      $dataa=new Managesale;
      $dataa->first_name=$req->ftname;
      $dataa->last_name=$req->ltname;
      $dataa->city=$req->city;
      $dataa->address=$req->address;
      $dataa->phone=$req->phone;
      $dataa->email=$req->email;
      $dataa->product_name=$details['name'];
      $dataa->price=$details['price'];
      $dataa->quantity=$details['quantity'];
      $dataa->total=$details['price'] * $details['quantity'];
    //   $data=[
    //     'subject'=>"",
    //     'body'=>"Thanks For Shoping. You will receive your Parcel within 3 to 4 Days. If You have any Query Contact us On 0348-6698915"
    // ];
    // Mail::to($req->email)->send(new MailNotify($data));
      $dataa->save();
      $dataa=Product::where('product_name',$details['name'])->decrement('quantity', $details['quantity']);

    }
    
    session()->forget('cart');
    
    return redirect()->back()->with(Session::flash('message', 'Your order is successfuly placed. Thanks For Shoping.')); 
   
    }
   
    
    }
