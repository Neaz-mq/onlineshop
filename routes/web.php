<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\ReportController;
use Illuminate\Support\Facades\Route;

/*cle
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



Route::get('/categories',[CategoryController::class, 'list'])->name('category.list');
Route::get('/category/create',[CategoryController::class, 'create'])->name('category.create');




Route::get('/orders',[OrderController::class, 'item'])->name('order.item');
Route::get('/products',[ProductController::class, 'show'])->name('product.show');
Route::get('/customers',[CustomerController::class, 'person'])->name('customer.list');
Route::get('/reports',[ReportController::class, 'show'])->name('report.list');


//url,controller,method

//model
//route
//view
//controller
