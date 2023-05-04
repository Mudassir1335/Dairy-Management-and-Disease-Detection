<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function addcategory(Request $req)
    {
        $category=new Category;
       
        $category->category_name=$req->cname;
        
        $category->save();
        return redirect('category');

    }
    public function showcategory()
    {
        $data= Category::all();
        return view('category',['categories'=>$data]);

    }
    public function delete($id)
    {
        $data=Category::find($id);
        $data->delete();
        return redirect('category');

    }
    public function updateproduct(request $req)
    {
       
       $data=Category::find($req->id);
      
       $data->category_name=$req->cname;
       
       $data->update();
       return redirect('category');

}
}
