
	$(function (){


				$("#qtd_quartos").keypress(verificaNumero);
				$("#qtd_banheiros").keypress(verificaNumero);
				$("#qtd_acomoda").keypress(verificaNumero);
				$("#qtd_vagas").keypress(verificaNumero);

				$('#in_aluguel').priceFormat({
                    prefix: 'R$ ',
                    centsSeparator: ',',
                    thousandsSeparator: '.'
                });
				

				$('#bt_remover_01').click(function(){
					img = $('#img_principal').val();
					if(img != '')
					{
						$.post('remove_img.php',{img : img}
						,function(retorno)
						{
							$('#img_principal').val('');
							$('#imagem').val('');
							$('#visualizar').slideUp('Fast');
						});
					}
				});
				$('#bt_remover_02').click(function(){
					img = $('#img_2').val();
					if(img != '')
					{
						$.post('remove_img.php',{img : img}
						,function(retorno)
						{

							$('#img_2').val('');
							$('#complementar1').val('');
							$('#visualizar2').slideUp('Fast');
						});
					}
				});
				$('#bt_remover_03').click(function(){
					img = $('#img_3').val();
					if(img != '')
					{
						$.post('remove_img.php',{img : img}
						,function(retorno)
						{
							$('#complementar2').val('');	
							$('#img_3').val();
							$('#visualizar3').slideUp('Fast');
						});
					}
				});



		 		$('#imagem').live('change',function(){
						 $('#visualizar').html("<label style=\"font-style:italic;\" >Seja paciente, Imagem esta sendo carregada  ... <hr>  *  Quanto maior a qualidade da Imagem mais tempo levará, pra ela ser carregada .  </label>");
						 $('#visualizar').fadeIn("slow");
						 $('#formulario').ajaxForm({
							target:'#visualizar'
						 }).submit();
				 });

		 		$('#complementar1').live('change',function(){
						 $('#visualizar2').html("<label style=\"font-style:italic;\" >Seja paciente, Imagem esta sendo carregada  ... <hr>  *  Quanto maior a qualidade da Imagem mais tempo levará, pra ela ser carregada .  </label>");
						 $('#visualizar2').fadeIn("slow");
						 $('#formulario2').ajaxForm({
							target:'#visualizar2'
						 }).submit();
				 });

		 		$('#complementar2').live('change',function(){
						 $('#visualizar3').html("<label style=\"font-style:italic;\" >Seja paciente, Imagem esta sendo carregada  ... <hr>  *  Quanto maior a qualidade da Imagem mais tempo levará, pra ela ser carregada .  </label>");
						 $('#visualizar3').fadeIn("slow");
						 $('#formulario3').ajaxForm({
							target:'#visualizar3'
						 }).submit();
				 });


				$('#bt_publicar_moradia').click(function(){

				endereco   	       = true;
				falarcom  	       = true;
				bairro    	       = true;
				referencia    	   = true;
				descricao          = true;
				qtd_quartos        = true;
				qtd_banheiros      = true;
				qtd_vagas          = true;
				qtd_acomoda        = true;
				outras_info        = true;
				email1             = true;
				telefone1          = true;
				aluguel            = true;
				

				if($('#in_endereco').val() == '')
				{
					$('#in_endereco').css("border-color","#E68080");
					$('#in_endereco').attr("placeholder","Campo Obrigatório");
					endereco = false;
				}
				else 
				{
					$('#in_endereco').css("border-color","#dedede");
					vl_endereco = $('#in_endereco').val();
				}

				if($('#in_aluguel').val() == '')
				{
					$('#in_aluguel').css("border-color","#E68080");
					$('#in_aluguel').attr("placeholder","Campo Obrigatório");
					aluguel = false;
				}
				else 
				{
					$('#in_aluguel').css("border-color","#dedede");
					vl_aluguel = $('#in_aluguel').val();
					vl_aluguel     = vl_aluguel.replace( "R" , ""); 
					vl_aluguel     = vl_aluguel.replace( "$" , "");
					vl_aluguel     = vl_aluguel.replace( " " , "");
					vl_aluguel     = vl_aluguel.replace( "," , ".");

				}



				if($('#in_falar_com').val() == '')
				{
					$('#in_falar_com').css("border-color","#E68080");
					$('#in_falar_com').attr("placeholder","Campo Obrigatório");
					falarcom = false;
				}
				else 
				{
					$('#in_falar_com').css("border-color","#dedede");
					vl_falarcom = $('#in_falar_com').val();
				}



				if($('#in_bairro').val() == '')
				{
					$('#in_bairro').css("border-color","#E68080");
					$('#in_bairro').attr("placeholder","Campo Obrigatório");
					bairro = false;
				}
				else
				{ 
					$('#in_bairro').css("border-color","#dedede");					
					vl_bairro = $('#in_bairro').val();
				}


				if($('#in_referencia').val() == '')
				{
					$('#in_referencia').css("border-color","#E68080");
					$('#in_referencia').attr("placeholder","Campo Obrigatório");
					referencia = false;
				}
				else 
				{
					$('#in_referencia').css("border-color","#dedede");
					vl_referencia = $('#in_referencia').val();

				}




				if($('#in_decricao').val() == '')
				{
					$('#in_decricao').css("border-color","#E68080");
					$('#in_decricao').attr("placeholder","Campo Obrigatório");
					descricao = false;
				}
				else 
				{
					$('#in_decricao').css("border-color","#dedede");
					vl_descricao = $('#in_decricao').val();

				}

				if($('#qtd_quartos').val() == '')
				{
					$('#qtd_quartos').css("border-color","#E68080");
					$('#qtd_quartos').attr("placeholder","Campo Obrigatório");
					qtd_quartos = false;
				}
				else 
				{
					$('#qtd_quartos').css("border-color","#dedede");
					vl_qtd_quartos = $('#qtd_quartos').val();
				}



				if($('#qtd_banheiros').val() == '')
				{
					$('#qtd_banheiros').css("border-color","#E68080");
					$('#qtd_banheiros').attr("placeholder","Campo Obrigatório");
					qtd_banheiros = false;
				}
				else 
				{
					$('#qtd_banheiros').css("border-color","#dedede");
					vl_qtd_banheiros = $('#qtd_banheiros').val();

				}





				if($('#qtd_vagas').val() == '')
				{
					$('#qtd_vagas').css("border-color","#E68080");
					$('#qtd_vagas').attr("placeholder","Campo Obrigatório");
					qtd_vagas = false;
				}
				else 
				{
					$('#qtd_vagas').css("border-color","#dedede");
					vl_qtd_vagas = $('#qtd_vagas').val();

				}




				if($('#qtd_acomoda').val() == '')
				{
					$('#qtd_acomoda').css("border-color","#E68080");
					$('#qtd_acomoda').attr("placeholder","Campo Obrigatório");
					qtd_acomoda = false;
				}
				else 
				{
					$('#qtd_acomoda').css("border-color","#dedede");
					vl_qtd_acomoda = $('#qtd_acomoda').val();

				}
				if($('#in_info').val() == '')
				{
					$('#in_info').css("border-color","#E68080");
					$('#in_info').attr("placeholder","Campo Obrigatório");
					outras_info = false;
				}
				else 
				{

					$('#in_info').css("border-color","#dedede");
					vl_outras_info = $('#in_info').val();

				}

				if(!(validaEmail($('#in_email1').val())))
				{
					$('#in_email1').css("border-color","#E68080");
					$('#in_email1').attr("placeholder","Email Inválido");
					email1 = false;

				}
				else 
				{
					$('#in_email1').css("border-color","#dedede");
					vl_email1 = $('#in_email1').val();

				}
				if($('#in_tel1').val() == '')
				{
					$('#in_tel1').css("border-color","#E68080");
					$('#in_tel1').attr("placeholder","Campo Obrigatório");
					telefone1 = false;
				}
				else 
				{
					$('#in_tel1').css("border-color","#dedede");
					vl_telefone1 = $('#in_tel1').val();

				}

				vl_telefone2 = $('#in_tel2').val();
				vl_email2    = $('#in_email2').val();
				img_1        = $('#img_principal').val();
				img_2        = $('#img_2').val();
				img_3        = $('#img_3').val();
				email        = $('#email').val();
				tipo         = $('#cb_tipo :selected').text();

				if(aluguel && endereco && falarcom && bairro && referencia && descricao && qtd_quartos && qtd_banheiros && qtd_vagas && qtd_acomoda && outras_info && email1 && telefone1)
				{
					$('#carregando').show();

					$.post('funcao_anunciar_moradia.php',{
						email          : email,
						endereco       : vl_endereco,
						falarcom       : vl_falarcom,
						bairro         : vl_bairro,
						tipo           : tipo,
						referencia     : vl_referencia,
						descricao      : vl_descricao,
						qtd_quartos    : vl_qtd_quartos,
						qtd_banheiros  : vl_qtd_banheiros,
						qtd_vagas      : vl_qtd_vagas,
						qtd_acomoda    : vl_qtd_acomoda,
						aluguel        : vl_aluguel,
						outras_info    : vl_outras_info,
						email1         : vl_email1,
						telefone1      : vl_telefone1,
						email2         : vl_email2,
						telefone2      : vl_telefone2,
						img_1          : img_1,
						img_2          : img_2,
						img_3          : img_3

					}
					,function(retorno)
					{
						$('#in_tel2').val('');
						$('#in_email2').val('');
						$('#in_falar_com').val('');
						$('#in_tel1').val('');
						$('#in_email1').val('');
						$('#in_info').val('');
						$('#in_endereco').val('');
						$('#in_aluguel').val('');
						$('#in_bairro').val('');
						$('#in_referencia').val('');
						$('#in_decricao').val('');
						$('#qtd_quartos').val('');
						$('#qtd_banheiros').val('');
						$('#qtd_vagas').val('');
						$('#qtd_acomoda').val('');
						$('#img_principal').val('');
						$('#img_2').val('');
						$('#img_3').val('');
						$('#imagem').val('');
						$('#complementar1').val('');
						$('#complementar2').val('');
						$('#visualizar').slideUp('Fast');
						$('#visualizar2').slideUp('Fast');
						$('#visualizar3').slideUp('Fast');

						$('#carregando').hide();

						alertify.set({ labels: { ok: "Tudo Bem !", cancel: "Deny" } });
						alertify.alert("<span style=\"font-size:22px\">Anuncio publicado com sucesso, Obrigado.</span>");
					
					});

				
				}
				else
				{
					alertify.error("Preencha todos os Campos Obrigatórios !");
				}

			});


			$("input.data").mask("99/99/9999");

		});

