<?php

use Illuminate\Support\Facades\Route;
//controller người dùng
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ContactController;

//controller quản lý
// use App\Http\Controllers\backend\;

Route::get('/',[HomeController::class,'index'])->name('site.home');
Route::get('san-pham',[ProductController::class, 'index'])->name('site.product');
Route::get('chi-tiet-san-pham/{slug}',[ProductController::class,'detail'])->name('site.product.detail');
Route::get('lien-he',[ContactController::class,'index'])->name('site.contact');
