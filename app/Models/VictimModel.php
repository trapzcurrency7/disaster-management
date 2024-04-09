<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class VictimModel extends BaseModel {

	public function getDetails($postData){
		
		$fileArray = array(
						"id",
						"address",
						"pincode",
						"disaster_type"
					);

		$order = [array("column"=>0,"dir"=>"asc","name"=>"")];
	 	$draw = $postData['draw']; 
        $start = $postData['start']; 
        $rowPerPage = $postData['length']; 
        $orderArray = isset($postData['order'])?$postData['order']:$order;
       	
        $columnNameArray = $postData['columns'];
                            
        $searchArray = $postData['search'];
        $columnIndex = $orderArray[0]['column'];
        $columnName = $fileArray[$columnNameArray[$columnIndex]['data']]; 
        $columnSortOrder = $orderArray[0]['dir']; 
        $searchValue = $searchArray['value']; 

        $users = "";

        $users = DB::table('disaster');
        $total = $users->count();
        $users = "";
        $users = DB::table('disaster');
        if (!empty($searchValue)) {
            $users = $users->where('address','like','%'.$searchValue.'%');
            $users = $users->orWhere('pincode','like','%'.$searchValue.'%');
        }
        $totalFilter = $users->count();
        $users = "";
        // $data = [];
      	$users = DB::table('disaster');
      	if (!empty($searchValue)) {
            $users = $users->where('address','like','%'.$searchValue.'%');
            $users = $users->orWhere('pincode','like','%'.$searchValue.'%');
        }
        $users = $users->skip($start)->take($rowPerPage);
        $users = $users->orderBy($columnName,$columnSortOrder);
        $users = $users->get();
    	$data = [];
        foreach ($users as $value) {

        	$data[] = $value->id;
        	$data[] = $value->pincode;
        	$data[] = $value->address;
        	$data[] = $value->disaster_type;

        	$mainData[] = $data;
        	$data = "";
        	$data = [];
        }
		$response = array(
            "draw" => intval($draw),
            "recordsTotal" => $total,
            "recordsFiltered" => $totalFilter,
            "data" => $mainData,
        );

		return $response;
	}
	public function saveDisasterDetails($data){
		$builder = DB::table("disaster")
					->insert($data);
		return $builder;
	}
	
}