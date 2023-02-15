<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public  function listCategories(){

        $data = Category::orderBy('id','desc')->paginate(20);//paginator : danh sach co phan trang


        return view("admin.category.list",compact('data'));
    }

    public function create(){


        return view("admin.category.create");
    }



    public  function save(Request $request){

        $data = $request->all();
        Category::create($data);
        return redirect()->to('/admin/category');
        //ham nhan data tu form
    }


}
