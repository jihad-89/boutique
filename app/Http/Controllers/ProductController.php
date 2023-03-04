<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function addproduct(){
        $categories = Category::get();
        return view('admin.addproduct')->with('categories',$categories);
       }
       
       public function products(){
       
        $products = Product::get();
        return view('admin.products')->with('products', $products);
       }

       public function saveproduct(Request $request){

        $this->validate($request,[
            'product_name'=>'required',
            'product_price'=>'required',
            'product_category' => 'required',
         
            'product_image'=> 'image|nullable|max:1999',
        ]);

             // image avec name
            //print($request->file('image')->getClientOriginalName());
            $fileNameWithExt= $request->file('product_image')->getClientOriginalName();

            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
                // print($fileName);
            
                // avec exension
            $ext = $request->file('product_image')->getClientOriginalExtension();
                // file name to store
            $fileNameToStore = $fileName."_".time().".".$ext;
                // print($fileNameToStore);
            //uploading image

            $path=$request->file('product_image')->storeAs("public/product_images",
            $fileNameToStore);

            $product = new Product();
            $product->product_name =$request->input('product_name');
            $product->product_price =$request->input('product_price');
  
            $product->product_category =$request->input('product_category');
            $product->product_image =$fileNameToStore;
            $product->save();

            return back()->with("status" , "Votre slider a ete cree avec succes");
    }


    public function deleteproduct($id){
        $product= Product::find($id);
        Storage::delete("public/product_images/$product->product_image");
        $product->delete();
        return back()->with("status" , "Votre produit a ete supprime avec succes");
    }

    public function editproduct($id){
        
        $product = Product::find($id);
        $categories=Category::where('category_name', "!=", $product->category_name)->get();
        return view('admin.editproduct')->with("product",$product)->with('categories',$categories);

    }
    public function updateproduct($id ,Request $request){
        $product = Product::find($id);
        $product->product_name =$request->input('product_name');
        $product->product_price =$request->input('product_price');
        $product->product_category =$request->input('product_category');

        if($request->file('product_image')){
            $this->validate($request,[
                'product_image' => 'image|nullable|max:1999'
            ]);
            $fileNameWithExt= $request->file('product_image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $ext = $request->file('product_image')->getClientOriginalExtension();
            $fileNameToStore = $fileName."_".time().".".$ext;
            Storage::delete("public/product_images/$product->product_image");
           
            $path=$request->file('product_image')->storeAs("public/product_images",$fileNameToStore);

            $product->product_image= $fileNameToStore;
           
        }

        $product->update();
        return redirect('/products')->with("status" , "Votre produit a ete modifie avec succes");
    
    }
    public function unactivateproduct($id){
        $product = Product::find($id);
        $product->status=0;
        $product->update();
        return back();
    }
      
    public function activateproduct($id){
        $product = Product::find($id);
        $product->status=1;
        $product->update();
        return back();
    }
     

}
