<?php

namespace App\Http\Controllers;
use App\Models\Order;


class OrdersController extends Controller
{
    //
    public function orders(){

        $orders= Order::all();
        $orders->transform(function($order,$key){
            $order->cart=unserialize($order->cart);
            return $order;
        });
        return view('admin.orders')->with('orders',$orders);
       }
}
