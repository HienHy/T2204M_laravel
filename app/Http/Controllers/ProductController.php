<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function listProducts(Request $request)
    {

        $search = $request->get('search');

        $category_id = $request->get("category_id");
        $lowest_price = $request->get("lowest_price");
        $highest_price = $request->get("highest_price");

        $data = Product::LowestPrice($lowest_price)->HighestPrice($highest_price)-> CategoryFiler($category_id)-> Search("%$search%")->orderBy("id", "asc")->paginate(20);


        $categories = Category::all();

        return view("admin.product.list", compact('data', "categories"));


    }

//    public function listProducts()
//    {
////        $data = Product::all();//select * from products
//
////        $data = Product::limit(20)->orderBy("id","desc")->get();
//
//
////        $data = Product::leftJoin("categories","categories.id","=","products.category_id")
////            -> orderBy('id', 'desc')
////            ->select(['products.*',"categories.name as category_name"])
////            ->paginate(20);//paginator : danh sach co phan trang
//
//        $data = Product::limit(20)->orderBy("id","asc")->paginate(20);
//
//
//
//        return view("admin.product.list", compact('data'));
//
////        return view('admin.product.list',[
////            'data'=>$data
////        ]);
//    }

    public function create()
    {
        $categories = Category::all();


        return view("admin.product.create", compact('categories'));
    }

    public function edit(Product $product)
    {

//        $product = Product::find($id);
//        if ($product==null){
//            abort(404);
//        }


//        $product=Product::findOrFail($id);


        $categories = Category::all();


        return view("admin.product.edit", compact('categories', 'product'));
    }


    public function update(Product $product, Request $request)
    {

        $request->validate([
            "name" => "required|string|min:6",
            "price" => "required|numeric|min:0",
            "qty" => "required|numeric|min:0",
            "thumbnail" => "nullable|image|mimes:png,jpg,gif,jpeg"

        ], [
            "required" => "Vui lòng nhập thông tin",
            "numeric" => "Vui lòng nhập số",
            "min" => "Giá trị tối thiểu :attribute tối thiểu là :min"


        ]);
        //ham nhan data tu form


        $data = $request->except("thumbnail");

        //uploads file

        try {
            if ($request->hasFile("thumbnail")) {
                $file = $request->file("thumbnail");
                $fileName = time() . $file->getClientOriginalName();
                $path = public_path("uploads");
                $file->move($path, $fileName);
                $data["thumbnail"] = "/uploads/" . $fileName;
            }

        } catch (\Exception $e) {

        } finally {
            $data["thumbnail"] = isset($data["thumbnail"]) ? $data["thumbnail"] : $product->thumbnail;

        }


        $product->update($data);
        return redirect()->to('/admin/product');
    }


    public function delete(Product $product)
    {


        $product->delete();
        return redirect()->to("/admin/product");
    }


    public function save(Request $request)
    {
        $request->validate([
            "name" => "required|string|min:6",
            "price" => "required|numeric|min:0",
            "qty" => "required|numeric|min:0",
            "thumbnail" => "nullable|image|mimes:png,jpg,gif,jpeg"

        ], [
            "required" => "Vui lòng nhập thông tin",
            "numeric" => "Vui lòng nhập số",
            "min" => "Giá trị tối thiểu :attribute tối thiểu là :min"


        ]);
        //ham nhan data tu form


        $data = $request->except("thumbnail");

        //uploads file

        try {
            if ($request->hasFile("thumbnail")) {
                $file = $request->file("thumbnail");
                $fileName = time() . $file->getClientOriginalName();
                $path = public_path("uploads");
                $file->move($path, $fileName);
                $data["thumbnail"] = "/uploads/" . $fileName;
            }

        } catch (\Exception $e) {

        } finally {
            $data["thumbnail"] = isset($data["thumbnail"]) ? $data["thumbnail"] : null;

        }


        Product::create($data);
        return redirect()->to('/admin/product');
    }
}
