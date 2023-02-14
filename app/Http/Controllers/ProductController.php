<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function listProducts(){
//        $data = Product::all();//select * from products

//        $data = Product::limit(20)->orderBy("id","desc")->get();


        $data = Product::orderBy('id','desc')->paginate(20);//paginator : danh sach co phan trang


        return view("admin.product.list",compact('data'));

//        return view('admin.product.list',[
//            'data'=>$data
//        ]);
    }

    public function create(){
        $categories = Category::all();


    return view("admin.product.create",compact('categories'));
}


public  function store(Request $request){

$data = $request->all();
Product::create($data);
return redirect()->to('/admin/product');
        //ham nhan data tu form
}
}
