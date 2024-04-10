<?php
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController1;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\VolunteerController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\ValidateLogin;




Route::get('/', [HomeController1::class,'home']);
Route::post('/saveVictimForm', [HomeController1::class,'saveVictimForm']);
Route::post('/getComplaints', [HomeController1::class,'getComplaints']);

// About
Route::get('/about', [AboutController::class,'home']);

// Services
Route::get('/services', [ServicesController::class,'home']);


// Contact
Route::get('/contact', [ContactController::class,'home']);


// Only if the user is logged in then only this views will
Route::group([ValidateLogin::class=>['web']],function(){

 	Route::get('/admin/dashboard', [AdminController::class,'admin']);
	Route::get('/admin/volunteers', [VolunteerController::class,'listVolunteer']);

});


// Route::get('/login', [LoginController::class,'loginView'])->withoutMiddleware([ValidateLogin::class]);
 


//Login
Route::get('/login', [LoginController::class,'loginView']);
Route::post('/loginUser', [LoginController::class,'loginUser']);


