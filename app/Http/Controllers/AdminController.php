<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\ViewName;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Client;

class AdminController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function home(){
        $client =  Client::all()->count();
        $categories = Category::get()->count();
        $products = Product::get()->count();
        $orders= Order::all()->count();
        return view('admin.home',compact('orders','products','categories','client'));
    }

  

 
 
}
