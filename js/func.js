
$(document).ready(function(){
	$('#nif').keyup(function(){
		var username=$('#nif').val();
		if(nif!=""){
		$('#loader').show();
			$.post('post.php',{username:username},function(data){
				$('.feedback').text(data);
		$('#loader').hide();
			});
		}else{
			$(".feedback").text("Veuillez saisir un pseudo");
		}
	});
});
