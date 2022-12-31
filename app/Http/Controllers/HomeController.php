<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        // dd("Hello");
       $title='Dashboard';
       $house='Dashboard / home';
        return view('backend.partials.layouts.home', compact('title','house'));
    }

    public function contact()
    {
        // dd("Contact");
        return view('backend.partials.layouts.contact');
    }
}
