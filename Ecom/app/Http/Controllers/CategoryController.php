<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $categories=Category::all();
        return view('admin.categories.view_categories',compact('categories'));
    }
    public function addCategory(){
        return view('admin.categories.add_category');
    }
    public function insertCategory(Request $req){
        $validated=$req->validate([
            'category_name'=>'required',
        ]);
        if($validated){
            $category=new Category();
            $category->category_name=$req->category_name;
            $category->category_slug=$req->category_slug;
            $category->save();
            return redirect('admin/category');
        }
    }
    public function updateCat($id){
        $cat=Category::where('id',$id)->first();
        return view('admin.categories.update_category',compact('cat'));
    }
    public function postupdatecat(Request $req,$id){
        $validated=$req->validate([
            'category_name'=>'required',
        ],[
            'category_name.required'=>'The category name field is required.',
        ]);
        if($validated){

            $cat=Category::where('id',$id)->first();
            $cat->category_name=$req->category_name;
            $cat->category_slug=$req->category_slug;
            if($cat->save()){
                return redirect("admin/category");
            }
        }

    }
    public function deleteCat($id){
        $category=Category::where('id',$id)->first();
        $cat_id=$category->id;
        if($category->delete()){
            $prods=Product::where('category_id',$id)->get();
            foreach($prods as $p){
                $p->delete();
            }
        return redirect('admin/category');
        }
    }
    
}