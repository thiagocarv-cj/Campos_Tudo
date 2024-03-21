$(function(){

	$('li').removeClass('current_page_item');
	$('#li_fale').addClass('current_page_item');

	$('#menu_principal li').mousemove(function(e){

		$(this).css('background','green');

	}).mouseout(function() {
		$(this).css('background','117848');
	});


	$('#bt_enviar').click(function(){
		
		
		email      = true;
		nome       = true;
		mensagem   = true;
		if(!(validaEmail($('#email1').val()))){
			$('#email1').css("border-color","#E68080");
			$('#email1').attr("placeholder","Email Inválido");
			email = false;
		}
		else
		{
			$('#email1').css("border-color","#dedede");
		}
		if($('#nome').val().length < 2)
		{
			$('#nome').css("border-color","#E68080");
			nome = false;
		}
		else
		{
			$('#nome').css("border-color","#dedede");
		}
		if($('#mensagem').val().length < 5)
		{
			$('#mensagem').css("border-color","#E68080");
			$('#mensagem').attr("placeholder","Mensagem muito curta ...");
			mensgem = false;
		}
		else
		{
			$('#mensagem').css("border-color","#dedede");
		}

		
		if(nome && mensagem && email)
		{
			$('#carregando').show();

			$.post('envia_email.php',{nome : $('#nome').val(),email : $('#email1').val(), assunto : $('#assunto').val(), mensagem : $('#mensagem').val()}
			,function(retorno)
			{
				alertify.success("Mensagem enviada !");

				$('#nome').val('');
				$('#email1').val('');
				$('#mensagem').val('');
				$('#assunto').val('');
				$('#mensagem').attr("placeholder"," ");
				$('#email1').attr("placeholder","");
				$('#mensagem').css("border-color","#dedede");
				$('#nome').css("border-color","#dedede");
				$('#email1').css("border-color","#dedede");
				$('#carregando').hide();

			});
		}
		else
			alertify.error("Preencha os campos Obrigatórios .");

		

	});

});

function validaEmail(email){
	var str = email;
	var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	if(filtro.test(str)) {
		return true;
	} else {
		return false;
	}
}