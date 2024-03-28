<?php 
namespace App\Http\Controllers;

class HomeController1 extends Controller{

	public function _contruct(){
		parent::contstruct();
		$controller = $this->controller;
	}

	public function home(){
		

		$data['template'] = 'homeView.homeView';
		return view('include.mainLayout',$data);
	}	
}