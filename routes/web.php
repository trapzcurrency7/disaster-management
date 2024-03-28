<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController1;


Route::get('/', [HomeController1::class,'home']);
