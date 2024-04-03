<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
    
	public function _contruct(){
		parent::contstruct();
		$controller = $this->controller;
	}

	public function index(){
		
		$data['template'] = 'sourav.sourav';
		return view('include.mainLayout',$data);
	}
}
