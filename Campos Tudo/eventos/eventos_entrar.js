$(function(){

	/*$('#menu_principal li').mousemove(function(e){

		$(this).css('background','green');

	}).mouseout(function() {
		$(this).css('background','117848');
	});*/



	$('#bt_esqueci_senha').click(function(){

		$('#div_login').hide('fast');
		$('#div_esqueci').fadeIn('slow');

	});
	$('#bt_voltar_login').click(function(){

		$('#div_esqueci').hide('fast');
		$('#div_login').fadeIn('slow');
		
	});
	$('#bt_enviar_senha').click(function(){

		recuperacao = $('#email_recuperacao').val();

		if(!(validaEmail(recuperacao)))
		{
			$('#email_recuperacao').css("border-color","#E68080");
			$('#email_recuperacao').attr("placeholder","Email Inválido");
			email = false;

		}
		else 
			email = true;

		if(email)
		{
			$('#carregando').show();
			$.post('recuperar_senha.php',{email : recuperacao}
			,function(retorno)
			{
				if(retorno == "true")
				{
					$('#email_recuperacao').attr("placeholder"," ");
					$('#email_recuperacao').css("border-color","#dedede");
					alertify.set({ labels: { ok: "Tudo Bem !", cancel: "Deny" } });
					alertify.alert("<span style=\"font-size:22px\">Senha de Recuperação enviado para seu Email .</span>");
				}
				else if(retorno == "false")
				{
					alertify.set({ labels: { ok: "Tudo Bem !", cancel: "Deny" } });
					alertify.alert("<span style=\"font-size:22px\">Email não encontrado .</span>");
				}	
				$('#carregando').hide();	
			});
		}
		else
			alertify.error("Email Inválido");

	
	});

	$('#bt_entrar').click(function(){

		$('#carregando').show();

		$.post('logar.php',{email : $('#email1').val(), senha : $('#senha').val()}
		,function(retorno)
		{
			if(retorno == "1")
			{
				window.location = "my_page.php";
			}
			else if(retorno == "0")
			{
				alertify.error("Email ou Senha Incorreto !");
			}
			else 
			{
				alertify.set({ labels: { ok: "Confirmar", cancel: "Cancelar" } });
				alertify.confirm("<span style=\"font-size:22px\">Sua conta está desabilitada, Deseja Habilitá-la ?</span>", function (e) {
				if (e) {

						$('#carregando').show();
			
						$.post('funcao_atualiza_usuario.php',{email : retorno}
						,function(retorno)
						{

							alertify.set({ labels: { ok: "Tudo Bem !", cancel: "Deny" } });
							alertify.alert("<span style=\"font-size:22px\">Foi enviado uma mensagem no seu email para confirmação !</span>");
				
						});

					}
				});
			}
			
			$('#carregando').hide();

		});

		
		
	});



	$('#email1').blur(function(){

		email1 = $('#email1').val();
		if(email1 == "")
			$('#email1').css("border-color","red");
		else 
			$('#email1').css("border-color","#dedede");
	});
	
	$('#senha').blur(function(){

		senha = $('#senha').val();
		if(senha == "")
			$('#senha').css("border-color","red");
		else 
		{
			$('#senha').css("border-color","#dedede");

		}
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