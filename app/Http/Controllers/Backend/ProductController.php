<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function show()
    {
        // dd("show");

        $products=Product::all();
        //dd($products);
        return view('backend.partials.layouts.product.show',compact('products'));

    }

    public function store(Request $request)
    {
//dd($request->all());
     Product::create([

       'category_id'=>1,
       'name'=>$request->product_name,
       'price'=>$request->product_price,
       'details'=>$request->description
     ]);

     return redirect()->back();
    }
}
