<?php

namespace App\Models;

// // use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;

class NewModel 
{
	public function newf(){
		$builder = DB::builder('*')->where('id','12')->get('select')->row();
		return $builder;
		print_r("expression");
		exit;
	}public function newf1(){
		print_r("expression1");
		exit;
	}public function newf2(){
		print_r("expression2");
		exit;
	}public function newf3(){
		print_r("expression3");
		exit;
	}
}