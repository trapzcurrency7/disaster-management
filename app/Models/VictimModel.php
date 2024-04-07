<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class VictimModel extends BaseModel {

	public function getDetails(){
		$builder = DB::table("disaster")
					->get()
					->toArray();
		return $builder;
	}
	public function saveDisasterDetails($data){
		$builder = DB::table("disaster")
					->insert($data);
		return $builder;
	}
	
}