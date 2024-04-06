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

	$.each(formData,function(i,row) {
		data[row.name]=row.value	
	});
	console.log($('#csrf').val());

	$.ajax({
			url:'http://localhost/disaster-management/saveVictimForm',
			data: {
			        "_token": "{{ csrf_token() }}",
			        "id": "id"
			        },
			headers:{
				'X-CSRF-TOKEN':$('#csrf').val()
			},
			type:'post',
			success:function(response) {
				console.log(response);

			}
		});
}

