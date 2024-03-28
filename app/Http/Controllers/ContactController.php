<?php 
namespace App\Http\Controllers;

class ContactController extends Controller{

	public function _contruct(){
		parent::contstruct();
		$controller = $this->controller;
	}

	public function home(){
		
		$data['template'] = 'contact.contactView';
		return view('include.mainLayout',$data);
	}	
}