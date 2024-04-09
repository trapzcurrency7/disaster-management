

	$(document).ready(function() {

		// Do not touch this
		$.ajaxSetup({
		    beforeSend: function (xhr)
		    {
		       xhr.setRequestHeader("X-CSRF-TOKEN",$('#csrfTokenId').val());        
		    }
		});
		// Till here

		
		if(pageType=="home"){
			$('#home').css({'background-color':'red',
						});
		}
		if(pageType=="about"){
			$('#about').css({'background-color':'red',
						});
		}
		if(pageType=="services"){
			$('#services').css({'background-color':'red',
						});
		}
		if(pageType=="contact"){
			$('#contact').css({'background-color':'red',
						});
		}
	})