<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


//frontend
Route::get('/', function () {
    return view('layout');
});

Route::get('/trang_chu', [HomeController::class, 'index'])->name('home');
//backend
//Route::get('/admin', 'AdminController@index')->name('admin');


Route::get('/admin', [AdminController::class, 'index'])->name('admin');
