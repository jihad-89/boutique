<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //

    
    public function addcategory(){
        return view('admin.addcategorie');

    }

    public function categories(){
        $categories = Category::get();
        return view('admin.categories')->with("categories",$categories);
 
   }
 
    public function savecategory(Request $request){
        $category = new Category();
        $category->category_name = $request->input('category_name');

        $category->save();
        return back()->with("status" , "Votre categorie a ete cree avec succes");

    }

    public function deletecategory($id){
        $category= Category::find($id);
        $category->delete();
        return back()->with("status" , "Votre categorie a ete supprime avec succes");
    }

    public function editcategory($id){
        $category = Category::find($id);
        return view('admin.editcategory')->with("category",$category);

    }

    public function updatecategory($id, Request $request){
        $category = Category::find($id);
        $category->category_name = $request->input('category_name');
        $category->update();
        return redirect('admin/categories')->with("status" , "Votre categorie a ete modifie avec succes");

    }
}
