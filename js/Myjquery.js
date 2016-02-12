
		$(document).ready(function(){
			console.log("listo!");//primer mensaje
			
			$('#submit').click(function(){
				
					if($('#campo').val().length < 1){
						$('#resultado').html("Llenar el campo");
					}else{
						var valor={
					screen_name: $('#campo').val(),	
						};
						search(valor);
					}
			});
		});
				
			function search(screenName) {
				
				console.log('searching for');
				
				var screen_name1 = screenName;
						console.log(screen_name1);
  						$.ajax({
	  						
	  						 async: true,
							 type: "POST",
						     url: "Twitter_proxy.php",
							 data: {
								     screen_name1: screen_name1
								 },
	  						
						beforeSend: function () {
							$("#resultado").append("Procesando, espere por favor...");
							
							$.ajax({
								 async: true,
								 url: 'Twitter_proxy.php',
								 type: 'post',
								 dataType: 'jsonp',
								 data: {},	
								 
								 success: function(data) {
								  //alert(data);
								  var json_obj = $.parseJSON(data);
									
									for(item in json_obj){
											console.dir(json_obj);
											$("#resultado").append(
											'<li>' + json_obj[item]['text'] + '</li>'
											);
										}
									}
								});//fin de ajax
							},
						});
  					}
	