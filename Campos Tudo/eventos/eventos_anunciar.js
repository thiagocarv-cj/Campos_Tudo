	$(function (){

			$("#inputQuantidade").keypress(verificaNumero);

			$('#inputValorSalario').priceFormat({
                    prefix: 'R$ ',
                    centsSeparator: ',',
                    thousandsSeparator: '.'
                });
				

			$('#bt_publicar').click(function(){

				cargo   	   = true;
				qtd     	   = true;
				city    	   = true;
				empresa 	   = true;
				know    	   = true;
				atribuicoes    = true;
				dt_limite      = true;
				aos_cuidados   = true;
				encaminhamento = true;
				assunto        = true;
				
				if($('#inputCargo').val() == '')
				{
					$('#inputCargo').css("border-color","#E68080");
					$('#inputCargo').attr("placeholder","Campo Obrigatório");
					cargo = false;
				}
				else 
				{
					$('#inputCargo').css("border-color","#dedede");
					vl_cargo = $('#inputCargo').val();
				}
				if($('#inputQuantidade').val() == '')
				{
					$('#inputQuantidade').css("border-color","#E68080");
					$('#inputQuantidade').attr("placeholder","Campo Obrigatório");
					qtd = false;
				}
				else 
				{
					$('#inputQuantidade').css("border-color","#dedede");
					vl_qtd = $('#inputQuantidade').val();
				}
				if($('#inputCidade').val() == '')
				{
					$('#inputCidade').css("border-color","#E68080");
					$('#inputCidade').attr("placeholder","Campo Obrigatório");
					city = false;
				}
				else
				{ 
					$('#inputCidade').css("border-color","#dedede");					
					vl_city = $('#inputCidade').val();
				}
				if($('#inputEmpresa').val() == '')
				{
					$('#inputEmpresa').css("border-color","#E68080");
					$('#inputEmpresa').attr("placeholder","Campo Obrigatório");
					empresa = false;
				}
				else 
				{
					$('#inputEmpresa').css("border-color","#dedede");
					vl_empresa = $('#inputEmpresa').val();

				}
				if($('#inputConhecimentos').val() == '')
				{
					$('#inputConhecimentos').css("border-color","#E68080");
					$('#inputConhecimentos').attr("placeholder","Campo Obrigatório");
					know = false;
				}
				else 
				{
					$('#inputConhecimentos').css("border-color","#dedede");
					vl_know = $('#inputConhecimentos').val();

				}
				if($('#inputAtribuicoes').val() == '')
				{
					$('#inputAtribuicoes').css("border-color","#E68080");
					$('#inputAtribuicoes').attr("placeholder","Campo Obrigatório");
					atribuicoes = false;
				}
				else 
				{
					$('#inputAtribuicoes').css("border-color","#dedede");
					vl_atribuicoes = $('#inputAtribuicoes').val();
				}
				if($('#inputValorSalario').val() == '')
					salario = "a combinar"
				else
					salario = $('#inputValorSalario').val();
				if($('#inputDataLimite').val() == '')
				{
					$('#inputDataLimite').css("border-color","#E68080");
					$('#inputDataLimite').attr("placeholder","Campo Obrigatório");
					dt_limite = false;
				}
				else
				{ 
					$('#inputDataLimite').css("border-color","#dedede");
					vl_dt_limite = $('#inputDataLimite').val();

				}
				if($('#inputAosCuidados').val() == '')
				{
					$('#inputAosCuidados').css("border-color","#E68080");
					$('#inputAosCuidados').attr("placeholder","Campo Obrigatório");
					aos_cuidados = false;
				}
				else 
				{
					$('#inputAosCuidados').css("border-color","#dedede");
					vl_aos_cuidados = $('#inputAosCuidados').val();

				}
				if(($('#opcao_curriculo :selected').text() == 'e-mail' || $('#opcao_curriculo :selected').text() == 'site') && $('#valor_curriculo').val() == '')
				{
					$('#valor_curriculo').css("border-color","#E68080");
					$('#valor_curriculo').attr("placeholder","ensira o email");
					encaminhamento = false;
				}
				else 
					$('#valor_curriculo').css("border-color","#dedede");

				if($('#opcao_curriculo :selected').text() == 'pessoalmente' && $('#valor_curriculo').val() == '')
				{
					$('#valor_curriculo').css("border-color","#E68080");
					$('#valor_curriculo').attr("placeholder","ensira o endereço de entrega");
					encaminhamento = false;
				}
				else 
					$('#valor_curriculo').css("border-color","#dedede");
				if($('#opcao_curriculo :selected').text() != 'pessoalmente' && $('#assunto_curriculo').val() == '')
				{
					$('#assunto_curriculo').css("border-color","#E68080");
					$('#assunto_curriculo').attr("placeholder","Ensira o assunto");
					assunto = false;
				}
				else 
					$('#assunto_curriculo').css("border-color","#dedede");

				 vl_encaminhamento = $('#valor_curriculo').val();


				if(cargo && qtd && city && empresa && know && atribuicoes && dt_limite && aos_cuidados && encaminhamento && assunto)
				{
				
					$.post('funcao_anunciar.php',{assunto : $('#assunto_curriculo').val(),estado : $('#inputUF :selected').text(),cargo : vl_cargo, qtd : vl_qtd, city : vl_city, know : vl_know, atribuicoes : vl_atribuicoes,dt_limite : vl_dt_limite, aos_cuidados : vl_aos_cuidados,empresa : vl_empresa,  salario : salario,encaminhamento : vl_encaminhamento, beneficios : $('#inputBeneficios').val(),info : $('#inputAdicionais').val(),email : $('#_email').val()}
					,function(retorno)
					{
						$(window.document.location).attr('href','anunciar.php?cod=ok');
						
					});
				
				}
				else
				{
					alertify.error("Preencha todos os Campos Obrigatórios !");
				}


			});

			$('#opcao_curriculo').change(function(){

				if($('#opcao_curriculo :selected').text() == 'pessoalmente')
					$('#assunto_email').slideUp();
				else
					$('#assunto_email').slideDown();

			});

			$("input.data").mask("99/99/9999");

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

function verificaNumero(e) {
                if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                    return false;
                }
            }
