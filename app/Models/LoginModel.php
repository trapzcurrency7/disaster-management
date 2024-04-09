<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class LoginModel extends BaseModel {
	public function getUser($email,$password)
	{
		$builder = DB::table("admin")
					->where('EmailId',$email)
					->where('Password',$password)
					->get()->toArray();

		return $builder;
	}


}