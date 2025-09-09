<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ComboController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

//  products routes [first homework]
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::post('/products', [ProductController::class, 'store']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);



//  auth routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

//  Sanctum (TOKEN) protected routes
Route::middleware('auth:sanctum')->group(function () {
    //  default sanctum route
    Route::get('/user', [UserController::class, 'user']);
    //  show all users routes
    Route::get('/users/all', [UserController::class, 'index']);

    //  combo routes
    Route::prefix('combo')->group(function () {
        Route::get('/', [ComboController::class, 'index']);
        Route::get('/latest', [ComboController::class, 'latest']);
        Route::get('/hottest', [ComboController::class, 'hottest']);
        Route::get('/name/{name}', [ComboController::class, 'searchByName']);
        Route::get('/id/{id}', [ComboController::class, 'searchByid']);
    });


    //  cart routes
    Route::prefix('cart')->group(function () {
        Route::get('/', [CartController::class, 'index']);
        Route::post('/add', [CartController::class, 'add']);
        Route::post('/checkout', [CartController::class, 'checkout']);
        Route::put('id/{id}', [CartController::class, 'update']);
        Route::delete('id/{id}', [CartController::class, 'destroy']);
    });

    //  ORDER routes
    Route::prefix('order')->group(function () {
        Route::post('timeline/{id}', [OrderController::class, 'timeline']);
        Route::post('status/{id}', [OrderController::class, 'status']);
        Route::post('update/{id}', [OrderController::class, 'update']);
    });
});
