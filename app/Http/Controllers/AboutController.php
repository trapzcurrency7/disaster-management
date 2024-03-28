<?php 
namespace App\Http\Controllers;

class AboutController extends Controller{

	public function _contruct(){
		parent::contstruct();
		$controller = $this->controller;
	}

	public function home(){
		
		$data['template'] = 'about.about';
		return view('include.mainLayout',$data);
	}	
}