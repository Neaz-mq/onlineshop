<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function show()
    {
        // dd("show");

        $products=Product::paginate(3);
        $categories=Category::all();
        //dd($products);
        return view('backend.partials.layouts.product.show',compact('products','categories'));

    }

    public function store(Request $request)
    {
//dd($request->all());
     Product::create([

       'category_id'=>$request->category_id,
       'name'=>$request->product_name,
       'price'=>$request->product_price,
       'details'=>$request->description
     ]);

     return redirect()->back();
    }
}
