<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;

class VolunteerController extends BaseAdminController
{
    public function __construct(){
		// $user = $this->User;
		// $this->newModel = new NewModel(); 
		// $controller = $this->controller;
	}

	public function listVolunteer(){
			
		$data['template'] = 'admin.volunteer.listVolunteer';
		return view('include.adminLayout',$data);
	}
}
