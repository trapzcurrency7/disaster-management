<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController1;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController1::class,'home']);
Route::get('/about', [AboutController::class,'home']);
Route::get('/services', [ServicesController::class,'home']);
Route::get('/contact', [ContactController::class,'home']);
Route::get('/admin', [AdminController::class,'admin']);



