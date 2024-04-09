<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController1;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;


Route::get('/', [HomeController1::class,'home']);
Route::post('/saveVictimForm', [HomeController1::class,'saveVictimForm']);
Route::post('/getComplaints', [HomeController1::class,'getComplaints']);

// About
Route::get('/about', [AboutController::class,'home']);

// Services
Route::get('/services', [ServicesController::class,'home']);


// Contact
Route::get('/contact', [ContactController::class,'home']);

Route::get('/admin', [AdminController::class,'admin']);



