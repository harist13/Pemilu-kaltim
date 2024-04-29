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

    Route::group(['middleware' => 'pegawai'], function () {
    Route::get('pegawai/dashboard', 'AdminController@pegawaiDashboard')->name('pegawai.dashboard');
});

Route::group(['middleware' => 'masyarakat'], function () {
    Route::get('masyarakat/dashboard', 'AdminController@masyarakatDashboard')->name('masyarakat.dashboard');
});
    Route::group(['middleware' => ['admin']], function () {
        Route::match(['get', 'post'], 'dashboard', [AdminController::class,'dashboard']);
        Route::get('logout', [AdminController::class,'logout']);
    });
    
});
