<?php 
// use App\Http\Controllers\Controller;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\VictimModel;
// namespace App\Helpers\Helper;

class HomeController1 extends Controller{

	public function __construct(){
		$this->victimModel = new VictimModel;
		$this->aboutController = new AboutController;
	}

	public function home(){

		$template['template'] = 'homeView.homeView';
		return view('include.mainLayout',$template);
		
	}	
	public function saveVictimForm(Request $request){

		$postData = $request->input();
		$data = "";

		try {
			if(!empty($postData)){

				$data = array(
							'address'=>$postData['address'],
							'pincode'=>$postData['pincode'],
							'disaster_type'=>$postData['disasterType']
				      	);
			}

			$data = $this->victimModel->saveDisasterDetails($data);

			
			$response  = array('success'=>true,'statusMsg'=>"Saved successfully",'data'=>$getDetails);
			
		} catch (Exception $e) {
			$response  = array('success'=>true,'statusMsg'=>"Something went wrong");
		}
		
		return $response;

	}

	public function getComplaints(Request $request){
		$postData = $request->input();
		
		$getDetails = $this->victimModel->getDetails($postData);
	
		return response()->json($getDetails);
		// print_r($getDetails);
		// exit;
	}
	
}