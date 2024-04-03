<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gupta extends Controller
{
    //
    public function _contruct(){
		parent::contstruct();
		$controller = $this->controller;
	}

	public function index(){
		
		$data['template'] = 'guptaaa.gupta';
		return view('include.mainLayout',$data);
	}
}
