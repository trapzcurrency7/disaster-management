$(document).ready(function() {

	if(pageType=="home"){
		$('#home').css('background-color','red');
	}

	// bootbox.alert({
	// 	message:"This pop-up will ask the user where he is volunteer or victim",
	// 	closeButton:false,
	// })
	$('.headrM').on('click',function() {

		if($('.card-bottom').is(":hidden")){

			$('.card-bottom').slideDown(500);

		}else{
			$('.card-bottom').hide(500);
		}

		console.log("hello");
	})
	$('.main-card').fadeIn(2000);})