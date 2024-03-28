<?php 
namespace App\Http\Controllers;

class ServicesController extends Controller{

	public function _contruct(){
		parent::contstruct();
		$controller = $this->controller;
	}

	public function home(){
		
		$data['template'] = 'services.servicesView';
		return view('include.mainLayout',$data);
	}	
}