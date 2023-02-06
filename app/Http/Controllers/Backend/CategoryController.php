<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {
        // dd("category");

        return view ('backend.partials.layouts.category.list');
    }

    public function create()
    {
        // dd("category");

        return view ('backend.partials.layouts.category.create');
    }
}
