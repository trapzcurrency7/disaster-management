<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
		// $user = $this->User;
		// $this->newModel = new NewModel(); 
		// $controller = $this->controller;
	}

	public function admin(){
			
		$data['template'] = 'admin.admin';
		return view('include.adminLayout',$data);
	}
}
