<?php
// Web routing gate

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MajorsController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminMajorController;
use App\Http\Controllers\Admin\AdminDoctorController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminProfileController;


Route::get('/', [HomeController::class, 'home'])->name('home');     //GET   /
Route::get('/contact', [HomeController::class, 'contact']);         //GET   /contact
Route::get('/history', [HomeController::class, 'history']);         //GET   /history
Route::get('/majors', [MajorsController::class, 'majors']);         //GET   /majors
Route::get('/doctors', [DoctorsController::class, 'doctors']);      //GET   /doctors


Route::prefix('auth')->controller(AuthController::class)->name('auth.')->group(function () {
    Route::get('/login', 'showLoginForm')->name('login');           //GET   /auth/login
    Route::post('/login', 'login')->name('login.post');             //POST  /auth/login
    Route::get('/register', 'showRegisterForm')->name('register');  //GET   /register
    Route::post('/register', 'register')->name('register.post');    //POST  /register
    Route::post('/logout', 'logout')->name('logout');               //POST  /logout
});


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    Route::prefix('profile')->name('profile.')->controller(AdminProfileController::class)->group(function () {
        Route::get('/', 'index')->name('show');
        Route::get('/edit', 'edit')->name('edit');
        Route::put('/update', 'update')->name('update');
    });

    Route::prefix('doctor')->name('doctor.')->controller(AdminDoctorController::class)->group(function () {
        Route::get('/', 'index')->name('index');                //GET   /admin/doctor/
        Route::get('/{doctor}/show', 'show')->name('show');     //GET   /admin/doctor/
        Route::get('/create', 'create')->name('create');        //GET   /admin/doctor/create
        Route::post('/', 'store')->name('store');               //POST  /admin/doctor/
        Route::get('/{doctor}/edit/', 'edit')->name('edit');    //GET   /admin/doctor/{doctor}/edit
        Route::put('/{doctor}', 'update')->name('update');      //PUT   /admin/doctor/{doctor}
        Route::delete('/{doctor}', 'destroy')->name('destroy'); //DELETE/admin/doctor/{doctor}
    });

    Route::prefix('major')->name('major.')->controller(AdminMajorController::class)->group(function () {
        Route::get('/', 'index')->name('index');                  // GET   /admin/major
        Route::get('/{major}/show', 'show')->name('show');        // GET   /admin/major
        Route::get('/create', 'create')->name('create');          // GET   /admin/major/create
        Route::post('/', 'store')->name('store');                 // POST  /admin/major
        Route::get('/edit/{major}', 'edit')->name('edit');        // GET   /admin/major/{major}/edit
        Route::put('/{major}', 'update')->name('update');         // PUT   /admin/major/{major}
        Route::delete('/{major}', 'destroy')->name('destroy');    // DELETE/admin/major/{major}
    });
});
