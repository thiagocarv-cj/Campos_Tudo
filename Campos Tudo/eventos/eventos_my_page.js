$(function(){


	$('#imagem_face').live('change',function(){
		 
		 $('#visualizar').html("<label style=\"font-style:italic;\" >  Olá "+$('#nome_user').val()+", Seja paciente a imagem está sendo carregada  ... </label>");
		 $('#formulario_face').ajaxForm({
		 target:'#visualizar'
		 }).submit();

 	});



	$('.hover').mousemove(function(e) {
			
		var hovertext = $(this).attr('hovertext');
		$('#hoverdiv').text(hovertext).show();
		$('#hoverdiv').css('top', e.clientY-42).css('left', e.clientX);
		}).mouseout(function() {
		$('#hoverdiv').hide();
	});


	$('#link_alt_img_face').click(function(){

			if($('#muda_').val() == '1')
		    {
		    	$('#formulario_face').slideDown();
		    	$('#muda_').val('0');
		    }
		    else
		    {
		    	$('#formulario_face').slideUp();
		    	$('#muda_').val('1');	
		    }


	});


	

});
