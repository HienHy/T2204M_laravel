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
Route::get("/list-products",[\App\Http\Controllers\WebController::class,"listProducts"]);
Route::get("/add-products",[\App\Http\Controllers\WebController::class,"addProducts"]);



