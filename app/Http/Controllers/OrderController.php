<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
  public function list(){
      $data = Order::limit(20)->orderBy("id","asc")->paginate(20);



      return view("admin.order.list", compact('data'));
  }

    public function details(Order $order){



        return view("admin.order.details",compact('order'));
    }



}
