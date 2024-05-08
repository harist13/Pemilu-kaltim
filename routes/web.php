<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\LoginController;

// Route for showing registration form
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Route for handling registration form submission
Route::post('register', [RegisterController::class, 'register']);

Route::get('/', function () {
    return view('home');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('login', [LoginController::class,'login']);

Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::group(['middleware' => ['admin']], function () {
        Route::match(['get', 'post'], 'dashboard', [AdminController::class,'dashboard']);
        Route::get('logout', [AdminController::class,'logout']);
        Route::get('register', [AdminController::class, 'registerForm'])->name('admin.register');
        Route::post('register', [AdminController::class, 'register']);
    });
    Route::group(['middleware' => 'pegawai'], function () {
    Route::get('pegawai/dashboard', 'AdminController@pegawaiDashboard')->name('pegawai.dashboard');
});

Route::group(['middleware' => 'masyarakat'], function () {
    Route::get('masyarakat/dashboard', 'AdminController@masyarakatDashboard')->name('masyarakat.dashboard');
});
    
    
});
