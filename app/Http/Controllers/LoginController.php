<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel;
use Closure;
use Cookie;
use Tracker;
use Session;

class LoginController extends Controller{
	private $newModel;

	 
	public function __construct(){
		$this->loginModel = new LoginModel(); 
		// $controller = $this->controller;
	}
	public function loginView(){
		
		return view('login');
	}

	public function loginUser(Request $request){
		// print_r("hello");
		// exit;
		try{
			$postData = $request->input();
			$userDetail = $this->loginModel->getUser($postData['email'],$postData['password']);
			if(!empty($userDetail)){
				// print_r($)
				$id = $userDetail[0]->id;
				$token = array("user_name"=>$userDetail[0]->Name);
				$token = base64_encode(serialize($token));
				 // $response->headers->set('X-CSRF-TOKEN', csrf_token());
				$request->session()->put("user_name",$userDetail[0]->Name);
				$request->session()->put("user_id",$userDetail[0]->id);
				$request->session()->put("email_id",$userDetail[0]->EmailId);
				$request->session()->put("mobile_number",$userDetail[0]->MobileNumber);
				
				$response = array('success'=>true,'statusMsg'=>"User found","data"=>$token);
			}else{
				$response = array('success'=>false,'statusMsg'=>"User not found","data"=>"");
			}

		}catch(Exception $e){
			$response = array('success'=>false,'statusMsg'=>"Something went wrong","data"=>"");
		}
		
		return $response;
	}
		
}