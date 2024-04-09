$(document).ready(function() {
	// Do not touch this
	$.ajaxSetup({
	    beforeSend: function (xhr)
	    {
	       xhr.setRequestHeader("X-CSRF-TOKEN",$('#csrfTokenId').val());        
	    }
	});
	// Till here

	var check = localStorage.getItem("openClose");
	if(check==null){
		$('.sidebar').addClass('open');
	}else{
		if(check=="open"){
			$('.sidebar').addClass("open");

		}else{
			$('.sidebar').removeClass("open");
		}
	}
	if(pageType=="dashboard"){
		$('.dashboard').css({
			"background-color":"red"
		})
	}
	if(pageType=="listVolunteer"){
		$('.volunteers').css({
			"background-color":"red"
		})
	}
	$('.sidebar').on('click',function() {
		var sideBar = $('.open').val();
		if(sideBar==undefined){
			localStorage.setItem("openClose","close")
		}else{
			localStorage.setItem("openClose","open")
		}
	})
})