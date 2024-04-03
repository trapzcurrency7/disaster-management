<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController1;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\mycontroller;

Route::get('/', [HomeController1::class,'home']);
Route::get('/about', [AboutController::class,'home']);
Route::get('/services', [ServicesController::class,'home']);
Route::get('/contact', [ContactController::class,'home']);
// Route::get('/sourav', function (){
//     return view('sourav/sourav');
// });

// Route::get('/souravv', 'mycontroller@index');
Route::get('/sourav', [mycontroller::class,'index']);


