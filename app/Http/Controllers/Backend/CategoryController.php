<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function list()
    {
        // dd("category");
        // get all data from category
        // DML-  select * from categories;
        $categories=Category::all(); //get();
        //dd($categories);
        return view ('backend.partials.layouts.category.list',compact('categories'));
    }

    public function create()
    {
        // dd("category");

        return view ('backend.partials.layouts.category.create');
    }

    public function store(Request $request)
    {
         //dd($request->all());

         // left - column name | right - input field name of form

         Category::create([
           'name'=>$request->category_name,
           'details'=>$request->description


         ]);

         return redirect()->route('category.list');
    }

    public function allproduct($id)
    {
      
    
      //$products=Product::where('category_id', $id)->get();
      //dd($products);

      $category=Category::with('products')->find($id); // using relationship
      //dd($products);
      return view('backend.partials.layouts.category.product-list', compact('category'));


    }
}
