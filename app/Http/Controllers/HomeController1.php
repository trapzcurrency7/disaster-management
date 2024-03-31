<?php 
namespace App\Http\Controllers;
// namespace App\Helpers\Helper;

class HomeController1 extends Controller{

	public function __construct(){
		$this->controller = new Controller;
		$this->aboutController = new AboutController;
	}

	public function home(){

		
		$template['template'] = 'homeView.homeView';
		return view('include.mainLayout',$template);
		// $data['template'] = 'homeView.homeView';
		// return view('include.mainLayout',$data);
	}	
	
}