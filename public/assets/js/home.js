$(document).ready(function() {

	if(pageType=="home"){
		$('#home').css('background-color','red');
	}
	
	$('.headrM').on('click',function() {

		if($('.card-bottom').is(":hidden")){

			$('.card-bottom').slideDown(500);

		}else{
			$('.card-bottom').hide(500);
		}

		console.log("hello");
	})
	$('.main-card').fadeIn(2000);
	$('.saveVictimForm').click(function(){
		saveVictimForm();
	})

})

function saveVictimForm() {
	var formData = $('#formData').serializeArray();
	var data = {};
	var errors = Array();
	
	$.each(formData,function(i,row) {
		data[row.name]=row.value	
	});

	if(data.address==""){
		errors.push("Please enter address");
	}
	if(data.pincode==""){
		errors.push("Please enter pincode");

	}else{
		
		if(data.pincode.length>6 || data.pincode.length<6){
			errors.push("Please valid pincode");
		}
	}
	if(data.disasterType==""){
		errors.push("Please enter disaster type");
	}

	if(errors!=""){

		bootbox.alert({
			message:errors.join("<br>"),
			closeButton:false
		});

	}else{
		
		$.ajax({
			url:base_url+'/saveVictimForm',
			data: JSON.stringify(data) ,
			type:'POST',
			contentType:'application/json',
			success:function(response) {
				bootbox.alert({
						message:response.statusMsg,
						closeButton:false,
					})
					console.log(response.data)	
				
			}
		});
	}
}

