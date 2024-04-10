$(document).ready(function() {
	// Do not touch this
	$.ajaxSetup({
	    beforeSend: function (xhr)
	    {
	       xhr.setRequestHeader("X-CSRF-TOKEN",$('#csrfTokenId').val());        
	       xhr.setRequestHeader("X-CSRF-TOKEN",$('#csrfTokenId').val());        
	    }
	});
	
	// Till here
	
	$('.login').on('click',function() {
		login();
	})
})
function login() {
	var email = $('.email').val();	
	var password = $('.password').val();
	var errors = Array();	
	var data = {};
	
	if(email==''){
		errors.push("Please enter email");
	}
	if(password==''){
		errors.push("please enter password");
	}
	if(errors.length>0){
		bootbox.alert({
			message:errors.join('<br>'),
			closeButton:false,
		})

	}else{
		data.email = email;
		data.password = password;
		$.ajax({
			url:base_url+"/loginUser",
			type:"POST",
			data:JSON.stringify(data),
			contentType:"application/json",
			success:function(response) {
				
				if(response.success){
					window.location.href=base_url+'/admin/dashboard?id='+response.data;
				}else{
					bootbox.alert({
						message:response.statusMsg,
						closeButton:false
					})
				}

			}
		});
	}
}