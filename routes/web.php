<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::get('/', function(){
 
//     return view('backend.partials.layouts.home');
// });

// Route::get('/contact', function(){

//     return view('backend.partials.layouts.contact');
// });

Route::get('/',[HomeController::class, 'home']);
Route::get('/contact',[HomeController::class, 'contact']);


//url,controller,method

//model
//route
//view
//controller
