<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function show()
    {
        // dd("category");

        return view('backend.partials.layouts.report.list');
    }
}
