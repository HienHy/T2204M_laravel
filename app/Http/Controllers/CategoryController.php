<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public  function listCategories(){

        $data = Category::orderBy('id','asc')->paginate(20);//paginator : danh sach co phan trang


        return view("admin.category.list",compact('data'));
    }

    public function create(){


        return view("admin.category.create");
    }
    public function update(Category $category,Request $request){

        $request->validate([
            "name" => "required|string|min:6",
            "icon"=>"nullable|image|mimes:png,jpg,gif,jpeg"

        ], [
            "required" => "Vui lòng nhập thông tin",
            "min" => "Giá trị tối thiểu :attribute là :min"


        ]);
        //ham nhan data tu form


        $data = $request->except("icon");

        //uploads file

        try {
            if ($request->hasFile("icon")) {
                $file = $request->file("icon");
                $fileName = time() . $file->getClientOriginalName();
                $path = public_path("uploads");
                $file->move($path, $fileName);
                $data["icon"] = "/uploads/" . $fileName;
            }

        } catch (\Exception $e) {

        } finally {
            $data["icon"] = isset($data["icon"]) ? $data["icon"] : $category->icon;

        }


        $category->update($data);
        return redirect()->to('/admin/category');
    }



    public function edit(Category $category)
    {

//        $product = Product::find($id);
//        if ($product==null){
//            abort(404);
//        }


//        $product=Product::findOrFail($id);





        return view("admin.category.edit", compact('category'));
    }








    public  function save(Request $request){

        $request->validate([
            "name" => "required|string|min:6",
            "icon"=>"nullable|image|mimes:png,jpg,gif,jpeg"

        ], [
            "required" => "Vui lòng nhập thông tin",
            "min" => "Giá trị tối thiểu :attribute tối thiểu là :min"


        ]);
        //ham nhan data tu form


        $data = $request->except("thumbnail");

        //uploads file

        try {
            if ($request->hasFile("icon")) {
                $file = $request->file("icon");
                $fileName = time() . $file->getClientOriginalName();
                $path = public_path("uploads");
                $file->move($path, $fileName);
                $data["icon"] = "/uploads/" . $fileName;
            }

        } catch (\Exception $e) {

        } finally {
            $data["icon"] = isset($data["icon"]) ? $data["icon"] : null;

        }
        Category::create($data);
        return redirect()->to('/admin/category');
        //ham nhan data tu form
    }




    public function delete(Category $category){


        $category->delete();
        return redirect()->to("/admin/category");
    }


}
