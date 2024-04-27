<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;


Route::get('/', function () {
    return view('home');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/login', function () {
    return view('login');
});

Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::match(['get', 'post'], 'login', [AdminController::class,'login']);
    Route::group(['middleware' => ['admin']], function () {
        Route::match(['get', 'post'], 'dashboard', [AdminController::class,'dashboard']);
        Route::get('logout', [AdminController::class,'logout']);
    });
    
});
