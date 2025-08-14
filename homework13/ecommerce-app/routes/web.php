<?php

// Auxiliary classes dependency injection
use Illuminate\Support\Facades\Route;
// USER controllers dependency injection
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
// ADMIN controllers dependency injection
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\MessageController as AdminMessageController; //resource controller
use App\Http\Controllers\Admin\ProductController as AdminProductController; //resource controller



/** 
 * Routes for [HomeController] - USERS AREA
 */
// Route::middleware(['guests-area'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('about', [HomeController::class, 'about'])->name('about');
// });

/**
 * Routes for [ContactController] - USERS AREA
 */
Route::middleware(['users-area'])->group(function () {
    Route::post('send-message', [ContactController::class, 'sendMessage'])->name('send.message');
    Route::get('contact-us', [ContactController::class, 'contactForm'])->name('contact.form');
});


/**
 * Route group for Products [ProductController] - USERS AREA
 */
Route::prefix('products')->group(function () {
    Route::get('', [ProductController::class, 'index'])->name('products.listing');
    Route::get('product/{id}', [ProductController::class, 'show'])->name('product.show');
});

/**
 * Route group for 'auth' [AuthController] - USERS AREA
 */
Route::prefix('auth')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('login', [AuthController::class, 'loginSubmit'])->name('login.submit');
    Route::post('logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('register', [AuthController::class, 'register'])->name('auth.register');
    Route::post('register', [AuthController::class, 'registerSubmit'])->name('register.submit');
});

/**
 * ADMINS AREA ROUTES
 */
Route::prefix('admin')->middleware(['admins-area'])->group(function () {
    // resources controllers
    Route::resource('products', AdminProductController::class);
    Route::resource('messages', AdminMessageController::class);
    // 
    Route::get('dashboard', [AdminDashboardController::class, 'home'])->name('dashboard');
    Route::get('message/{id}/reply', [AdminMessageController::class, 'reply'])->name('message.reply');
});
