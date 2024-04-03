<?php 
namespace App\Http\Controllers;
use App\Models\NewModel;

class AboutController extends Controller{
	private $newModel;

	 
	public function __construct(){
		// $user = $this->User;
		$this->newModel = new NewModel(); 
		// $controller = $this->controller;
	}

	public function home(){
		
		$f = $this->newModel->newf2();
	
		$data['template'] = 'about.about';
		return view('include.mainLayout',$data);
	}
	public function h2(){
        return "hello";
    }	
}