<?php

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

// dang ky cac link web
Route::get("/",[\App\Http\Controllers\WebController::class,"home"]);



Route::get("/about-us",[\App\Http\Controllers\WebController::class,"aboutUs"]);
Route::get("/admin/product",[\App\Http\Controllers\ProductController::class,"listProducts"]);
Route::get("/admin/category",[\App\Http\Controllers\CategoryController::class,"listCategories"]);
Route::get("/admin/product/create",[\App\Http\Controllers\ProductController::class,"create"]);
Route::get("/admin/category/create",[\App\Http\Controllers\CategoryController::class,"create"]);
Route::post("/admin/product/create",[\App\Http\Controllers\ProductController::class,"store"]);
Route::post("/admin/category/create",[\App\Http\Controllers\CategoryController::class,"save"]);




