<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PdfController;
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

//Route::get('/', function () {
  //  return view('welcome');
//});

// client Controller

Route::get('/',[ClientController::class,'home']);
Route::get('/shop',[ClientController::class,'shop']);
Route::get('/cart',[ClientController::class,'cart']);
Route::get('/checkout',[ClientController::class,'checkout']);
Route::get('/register',[ClientController::class,'register']);
Route::get('/signin',[ClientController::class,'signin']);
Route::get('/addtocart/{id}',[ClientController::class,'addtocart']);
Route::put('/updateqty/{id}',[ClientController::class,'updateqty']);
Route::get('/removeitem/{id}',[ClientController::class,'removeitem']);
Route::post('/createaccount',[ClientController::class,'createaccount']);
Route::post('/accessaccount',[ClientController::class,'accessaccount']);
Route::get('/logout',[ClientController::class,'logout']);
Route::post('/payer',[ClientController::class,'payer']);





// admin Controller
Route::get('/admin',[AdminController::class,'home']);

// category Controller
Route::get('/addcategory',[CategoryController::class,'addcategory']);
Route::get('/categories',[CategoryController::class,'categories']);
Route::post('/admin/savecategory',[CategoryController::class,'savecategory']);
Route::delete('/admin/deletecategory/{id}',[CategoryController::class,'deletecategory']);
Route::get('/admin/editcategory/{id}',[CategoryController::class,'editcategory']);
Route::put('admin/updatecategory/{id}',[CategoryController::class,'updatecategory']);

// slider Controller
Route::get('/slider',[SliderController::class,'slider']);
Route::get('/addslider',[SliderController::class,'addslider']);
Route::post('/admin/saveslider',[SliderController::class,'saveslider']);
Route::delete('/admin/deleteslider/{id}',[SliderController::class,'deleteslider']);
Route::get('/admin/editslider/{id}',[SliderController::class,'editslider']);
Route::put('/admin/updateslider/{id}',[SliderController::class,'updateslider']);
Route::put('/admin/unactivateslider/{id}',[SliderController::class,'unactivateslider']);
Route::put('/admin/activateslider/{id}',[SliderController::class,'activateslider']);


// product Controller
Route::get('/addproduct',[ProductController::class,'addproduct']);
Route::get('/products',[ProductController::class,'products']);
Route::post('/admin/saveproduct',[ProductController::class,'saveproduct']);
Route::delete('/admin/deleteproduct/{id}',[ProductController::class,'deleteproduct']);
Route::get('/admin/editproduct/{id}',[ProductController::class,'editproduct']);
Route::put('/admin/updateproduct/{id}',[ProductController::class,'updateproduct']);
Route::put('/admin/unactivateproduct/{id}',[ProductController::class,'unactivateproduct']);
Route::put('/admin/activateproduct/{id}',[ProductController::class,'activateproduct']);





// orders Controller
Route::get('/orders',[OrdersController::class,'orders']);


// PDF Controller

Route::get('/seeorders/{id}',[PdfController::class,'seeorders']);
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
