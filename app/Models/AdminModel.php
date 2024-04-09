<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends BaseModel {

	public function getUser($id)
	{
		$builder = DB::table("admin")
					->where('id',$id)
					->get()->toArray();

		return $builder;
	}

}