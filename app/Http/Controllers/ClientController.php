<?php

namespace App\Http\Controllers;
use App\Models\Slider;

use App\Models\Product;
use App\Models\Cart;
use App\Models\Client;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Order;

class ClientController extends Controller
{
    //
    public function home(){
        $sliders = Slider::where('status',1)->get();
        $products = Product::where('status',1)->get();
        return view('client.home')->with('sliders', $sliders)->with('products', $products);
    }

    public function shop(){
        $products = Product::where('status',1)->get();
        return view('client.shop')->with('products', $products);
    }

    public function cart(){
        return view('client.cart');
    }

    public function checkout(){
       if(Session::has('client')) return view('client.checkout');
       return redirect('/signin');
    }

    public function register(){
        return view('client.register');
    }  
    
    public function createaccount(Request $request){
        $this->validate($request,[
            'email'=>'email|required|unique:clients',
            'password'=> 'required|min:4'
        ]);

        $client = new Client();
        $client->email=$request->input('email');
        $client->password=bcrypt($request->input('password'));
        $client->save();
        return back()->with("status" , "Votre compte a ete cree avec succes");
    }

    public function accessaccount(Request $request){
        $this->validate($request,[
            'email'=>'email|required',
          
        ]);
        $client =  Client::where('email',$request->email)->first();
        
        if($client){
            if(Hash::check($request->input('password'), $client->password)){
                Session::put('client',$client);
                return redirect('/shop');
            }

            return back()->with('error' , 'Wrong email or password');
        }
        return back()->with('error','You do not have an account with this email');
     
    }

    public function signin(){
        return view('client.signin');
    }

    public function logout(){
        Session::forget('client');
        return back();
    }
    public function addtocart($id){
        $product = Product::find($id);

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart= new Cart($oldCart);
        $cart->add($product);
        Session::put('cart',$cart);
        Session::put('topCart', $cart->items);

         return back();

    }

   
    public function updateqty($id , Request $request){
   
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart= new Cart($oldCart);
        $cart->updateQty($id,$request->qty);
        Session::put('cart',$cart);
        Session::put('topCart', $cart->items);

    return back();
    
    }

    public function removeitem($id){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        Session::put('cart',$cart);
        Session::put('topCart', $cart->items);

        return back();
    }

    public function payer(Request $request){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart= new Cart($oldCart); 

        $order = new Order();
        $order->names=$request->input('firstname')." ".$request->input('lastname');
        $order->address = $request->input('address');
        $order->tel = $request->input('tel');
        $order->cart= serialize($cart);
        $order->save();
        Session::forget('cart');
        Session::forget('topCart');

        return redirect('/shop')->with("status" , "Votre commande a ete effectuee avec succes");
    }

  
}
