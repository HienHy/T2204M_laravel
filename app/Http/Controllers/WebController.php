<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\Translation\t;

class WebController extends Controller
{

    public function home(){

        $orders_count=Order::count();

        $order_sum_grand_total=Order::sum("grand_total");

        $products_count=Product::count();

        $sum_qty = DB::table("order_product") ->sum("qty");


        $categories_data=Category::withCount("Products")->limit(6)->get();
        $categories_names = [];
        $category_products_counts=[];
        foreach ($categories_data as $item){
            $categories_names[] = $item->name;
            $category_products_counts[] = $item->products_count;
        }

        $categories_names = json_encode($categories_names);
        $category_products_counts = json_encode($category_products_counts);





        $today=today();
        $last7=today()->subDay(7);
        $last6=today()->subDay(6);
        $last5=today()->subDay(5);
        $last4=today()->subDay(4);
        $last3=today()->subDay(3);
        $last2=today()->subDay(2);
        $today_order =Order::whereDate("created_at",$today)->count();
        $last7_order =Order::whereDate("created_at",$last7)->count();
        $last6_order =Order::whereDate("created_at",$last6)->count();
        $last5_order =Order::whereDate("created_at",$last5)->count();
        $last4_order =Order::whereDate("created_at",$last4)->count();
        $last3_order =Order::whereDate("created_at",$last3)->count();
        $last2_order =Order::whereDate("created_at",$last2)->count();


        $arr=[];
        array_push($arr,$today_order,$last7_order,$last6_order,$last5_order,$last4_order,$last3_order,$last2_order);


        $arr= json_encode($arr);








        return view("welcome",compact("orders_count","order_sum_grand_total","products_count","sum_qty","categories_names","category_products_counts",'arr'));
    }

    public function aboutUs(){
        return view("about-us");
    }



    //
}
