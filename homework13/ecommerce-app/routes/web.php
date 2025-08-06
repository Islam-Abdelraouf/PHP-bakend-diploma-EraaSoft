<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get("/", [HomeController::class,"index"]);
Route::get('/contact', [HomeController::class,'contact']);
Route::get('/about', [HomeController::class,'about']);
Route::post('send-message', [HomeController::class,'sendMessage']);
Route::get('/products', [ProductController::class,'index']);
Route::get('product/{id}', [ProductController::class,'show']);
