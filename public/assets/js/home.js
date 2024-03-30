$(document).ready(function() {

	if(pageType=="home"){
		$('#home').css('background-color','red');
	}

	// bootbox.alert({
	// 	message:"This pop-up will ask the user where he is volunteer or victim",
	// 	closeButton:false,
	// })
	$('.element_header').on('click',function() {

		if($('.element_body').is(":hidden")){

			$('.element_body').show(500);

		}else{
			$('.element_body').hide(500);
		}

		console.log("hello");
	})
})