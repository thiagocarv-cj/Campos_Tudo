<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
	<head>
		
		<title>Campos Aluga</title>
		<meta name="description" content="Casas pra alugar em Campos do Jordão, é na Campos Tudo, veja, compartilhe e participe.">
		<meta content="Casas e apartamentos para alugar em Campos do Jordão, as melhores dicas esta na Campos Tudo, olhe, compartilhe e participe." property="og:description">




		<?php include "head.php" ?>

		<script>
	
			$(function(){

				$('#bt_anunciar').click(function(){

					if($('#setado').val() == 'true')
						window.location = "anunciar_casa.php";
					else
						window.location = "entrar.php?cod=without";					

				});

			});
			$(function(){
				$('#fechar').hide();
			});
	
		</script>
		<script class="jsbin" src="eventos/eventos_pizza.js"> </script>

	</head>
	
	<body>

		<?php include "topo.php" ?>
		
		<?php include "menu_vertical.php" ?>

		<?php include "barra_Info.php" ?>
		
		
		<!-- Main -->
			<div id="main-wrapper">
				<div class="5grid-layout 5grid-flush">
					<div class="row">
						<div class="8u" id="content">
			
						<?php include "menu_pizza.php";?>											
										
								<div id="produtos">

								<?php include "div_pizzas.php" ?>		

								</div>
							
							<div class="row">
								<div class="12u">
								
									<!-- Post -->
										<article class="box box-standard box-content">
											
													<a href="" class="button">Anterior</a>

													<div style="float:right;" ><a href="" class="button">Próximo</a></div>											
										</article>
								
								</div>
							</div>

						</div><!-- Fecha contet-->

						<div class="4u" id="sidebar">

						<!-- Carrinho de Produtos -->
								<section class="box box-standard box-mini-posts">
									
										<h2 align="right" ><img src="images/carrinho.png" alt="" /><span style="font-size:20px;"id="label_qtd_produtos"></span></h2>
										
											<div id="produtos_escolhidos">

											</div>

											<div align="right" id="butao" name="butao">
												
												<a style="margin-left:30px" href="#" onClick="fecharpedido()" class="button" id="botaofechar">Fechar Pedido</a>
												<div id="fechar" style="text-align: left;">
													<center>Dados para envio</center>
													<div style="">Nome:</div><input style="width: 350px" name="nome" id="nome" type="text" >
													<div style="">Rua:</div><input style="width: 350px" name="rua" id="rua" type="text">
													<div style=""><span style="margin-right: 266px">Bairro:</span>Numero:</div>
													<input style="width: 295px; margin-right: 5px" name="bairro" id="bairro" type="text"><input style="width: 48px" name="numero" id="numero"type="text"><br />
													<div style=""><span style="margin-right: 210px">Complemento:</span>Troco p/:</div>
													<input style="width: 280px" name="complemento" id="complemento" type="text">
													<input style="width: 65px" name="troco" id="troco" type="text"><br /><br />

													<div style="text-align: right;">
														<input name="voltar" id="voltar"type="button" value="Voltar" class="button">
														<input name="enviar" id="enviar"type="button" value="Enviar" class="button">
													</div>

												</div>
											</div>
					
											<input type="hidden" id="qtd_produtos" value"0"/>
										<span id ="desmarcar" >*Desmarque as opcões de recheio que você não quer na Pizza*</span>			
								</section>




							
							
								<!-- More Posts -->
								<section class="box box-standard">
									<h2>Em construção ...</h2>
									<ul class="style1">
										<li>
											<article>
												<h3><a href="#">Em construção ... Em construção ...</a></h3>
												<p>Em construção ... , Em construção ...Em construção ... 
												Em construção ...Em construção ...Em construção ....</p>
											</article>
										</li>
										<li>
											<article>
												<h3><a href="#">Em construção ...Em construção ...Em construção ...</a></h3>
												<p>Em construção ...Em construção ...Em construção ...Em construção ... 
												Em construção ...,Em construção ...Em construção ...</p>
											</article>
										</li>
										<li>
											<article>
												<h3><a href="#">Em construção ...Em construção ...Em construção ...</a></h3>
												<p>Em construção ..., Em construção ...Em construção ... 
												Em construção ...Em construção ...Em construção ...Em construção ....</p>
											</article>
										</li>
									</ul>
									<a href="#" class="button">Em construção ...Em construção ...</a>
								</section>

						</div>
					</div>
				</div>
			</div>

			<?php include "rodape.php" ?>

						<img id="carregando" style="display:none;position: absolute;top:65%;left:35%;" src="images/loading.gif"  alt="" />


			<?php

				if(isset($_SESSION["nome_user"]) AND isset($_SESSION['email_user'])) 
					$setado = "true";
				else
					$setado = "false";
			
			?>




								<!-- inputs escondidos-->

					    <input type="hidden" id="setado"  value="<?php echo $setado; ?>" />    

	</body>
</html>