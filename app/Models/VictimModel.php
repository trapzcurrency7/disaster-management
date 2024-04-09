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
	 	$draw = $postData['draw']; 
        $start = $postData['start']; // where to start next records for 
        $rowPerPage = $postData['length']; // How many recods needed per 
        $orderArray = $postData['order'];
        $columnNameArray = $postData['columns']; // It will give us columns array
                            
        $searchArray = $postData['search'];
        $columnIndex = $orderArray[0]['column'];
        $columnName = $fileArray[$columnNameArray[$columnIndex]['data']]; // Here we will 
        // print_r($columnName);
        // exit;
        $columnSortOrder = $orderArray[0]['dir']; // This 
        $searchArrayValue = $searchArray['value']; // This is search value 

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
        	$data[] = $value->address;
        	$data[] = $value->pincode;
        	$data[] = $value->disaster_type;
        }
		$response = array(
            "draw" => intval($draw),
            "recordsTotal" => $total,
            "recordsFiltered" => $totalFilter,
            "data" => $data,
        );

		return $response;
	}
	public function saveDisasterDetails($data){
		$builder = DB::table("disaster")
					->insert($data);
		return $builder;
	}
	
}