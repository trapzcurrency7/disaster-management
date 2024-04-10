<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Models\AdminModel;

use Cookie;
use Tracker;
use Session;

class AdminController extends BaseAdminController
{
    public function __construct(){
		// $user = $this->User;
		$this->adminModel = new AdminModel(); 
		// $controller = $this->controller;
	}

	public function admin(Request $request){

		$postData = $request->input();
		$id = "12";
		if(isset($postData['id'])){
			$id = $postData['id'];
		}else{
			$id = $request->session()->get("user_id");
		}

		// if(!empty($id)){
		// 	$data['adminData'] = $this->adminModel->getUser($id);
			$data['template'] = 'admin.dashboard';
			return view('include.adminLayout',$data);
		// }else{
		// 	// $data['template'] = 'admin.dashboard';
		// 	// redirect
		// 	return redirect('login');
		// }	
		
	}
}
