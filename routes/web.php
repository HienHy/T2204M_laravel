<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WebController;

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

// dang ky cac link web
Route::get("/",[WebController::class,"home"]);
Route::get("/about-us",[WebController::class,"aboutUs"]);


Route::get("/admin/product",[ProductController::class,"listProducts"]);
Route::get("/admin/product/create",[ProductController::class,"create"]);
Route::post("/admin/product/create",[ProductController::class,"save"]);
Route::get("/admin/product/edit/{product}",[ProductController::class,"edit"])->name("product_edit");
Route::put("/admin/product/edit/{product}",[ProductController::class,"update"]);
Route::delete("/admin/product/edit/{product}",[ProductController::class,"delete"])->name("product_delete");







Route::get("/admin/category",[CategoryController::class,"listCategories"]);
Route::get("/admin/category/create",[CategoryController::class,"create"]);
Route::post("/admin/category/create",[CategoryController::class,"save"]);
Route::get("/admin/category/edit/{category}",[CategoryController::class,"edit"])->name("category_edit");
Route::put("/admin/category/edit/{category}",[CategoryController::class,"update"]);
Route::delete("/admin/category/edit/{category}",[CategoryController::class,"delete"])->name("category_delete");




Route::get("/admin/order",[\App\Http\Controllers\OrderController::class,"list"]);
Route::get("/admin/order/details/{order}",[\App\Http\Controllers\OrderController::class,"details"])->name('order_details');












