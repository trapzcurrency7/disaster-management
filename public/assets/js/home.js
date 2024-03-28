$(document).ready(function() {

	if(pageType=="home"){
		$('#home').css('background-color','red');
	}

	bootbox.alert({
		message:"This pop-up will ask the user where he is volunteer or victim",
		closeButton:false,
	})
})