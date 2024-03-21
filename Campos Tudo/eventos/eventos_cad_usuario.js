$(function(){

	$('#menu_principal li').mousemove(function(e){

		$(this).css('background','green');

	}).mouseout(function() {
		$(this).css('background','117848');
	});


	$('#bt_cadastrar').click(function(){

		$('#carregando').show();

		nome       = true; 
		sobrenome  = true;
		email      = true;
		senha      = true;



		if($('#nome').val() == '')
		{
			$('#nome').css("border-color","#E68080");
			$('#nome').attr("placeholder","Campo Obrigatório");
			nome = false;
		}
		else 
		{
			$('#nome').css("border-color","#dedede");
			vl_nome= $('#nome').val();
		}
		if($('#sobrenome').val() == '')
		{
			$('#sobrenome').css("border-color","#E68080");
			$('#sobrenome').attr("placeholder","Campo Obrigatório");
			sobrenome = false;
		}
		else 
		{
			$('#sobrenome').css("border-color","#dedede");
			vl_sobrenome= $('#sobrenome').val();
		}

		if(!(validaEmail($('#email1').val()))  || $('#email1').val() != $('#email2').val())
		{
			if(!(validaEmail($('#email1').val())))
			{
				$('#email1').css("border-color","#E68080");
				$('#email1').attr("placeholder","Email inválido");

			}
			if($('#email1').val() != $('#email2').val())
			{
				$('#email2').css("border-color","#E68080");
				$('#email2').attr("placeholder","emails não são iguais .");
			}

				email = false;
		}
		else 
		{
			$('#email1').css("border-color","#dedede");
			$('#email2').css("border-color","#dedede");
			vl_email = $('#email1').val();
		}

		if($('#senha1').val().length < 6 || $('#senha1').val() != $('#senha2').val())
		{
			if($('#senha1').val().length < 6)
			{
				$('#senha1').css("border-color","#E68080");
				$('#senha1').attr("placeholder","Senha muito curta");
				$('#senha1').val('');
			}
			if($('#senha1').val() != $('#senha2').val())
			{
				$('#senha2').css("border-color","#E68080");
				$('#senha2').attr("placeholder","senhas não são iguais .");
				$('#senha2').val('');
			}

				senha = false;
		}
		else 
		{
			$('#senha1').css("border-color","#dedede");
			$('#senha2').css("border-color","#dedede");
			vl_senha = $('#senha1').val();
		}


		
		if(nome && sobrenome && email && senha)
		{

			$.post('funcao_cad_usuario.php',{nome : vl_nome, sobrenome : vl_sobrenome, empresa : $('#empresa').val(), email : vl_email, senha : vl_senha }
			,function(retorno)
			{
				$('#carregando').hide();
				if(retorno == "true")
				{
					$('#senha2').val('');
					$('#senha1').val('');
					$('#email1').val('');
					$('#email2').val('');
					$('#nome').val('');
					$('#empresa').val('');
					$('#sobrenome').val('');
					

					$('#carregando').hide();

					alertify.set({ labels: { ok: "Tudo Bem !", cancel: "Deny" } });
					alertify.alert("<span style=\"font-size:22px\">Cadastro Efetuado, foi enviado uma mensagem no seu email para confirmação !</span>");

				}
				else	
					alertify.error("Ops ! Este email já esta cadastrado .");
			});

		}
		else
		{
			alertify.error("Preencha os campos obrigatórios !");
			$('#carregando').hide();
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