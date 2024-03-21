<?php 	session_start(); ?>

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
	
		</script>

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

							<?php

							     	include "conexao.php";

							     	$busca = "SELECT * FROM aluga ORDER BY data DESC ";
							     	$total_reg = "16";

							     	if (!(isset($_GET['pagina']))) {
										$pagina = "0";
									} 
									else
										$pagina = $_GET['pagina'];
									
									$inicio = $pagina * $total_reg;

									$limite = mysql_query("$busca LIMIT $inicio,$total_reg");
									$todos = mysql_query("$busca");

									$tr = mysql_num_rows($todos); // verifica o número total de registros
									$tp = round($tr / $total_reg); // verifica o número total de páginas
									
									while ($leitor = mysql_fetch_array($limite)) {
											
										$id    			= $leitor['id'];
										$bairro         = $leitor['bairro'];   
										$endereco       = $leitor['endereco'];
										$tipo           = $leitor['tipo'];
										$referencia     = $leitor['referencia'];  
										$descricao      = $leitor['descricao'];  
										$dt_inicio      = $leitor['data'];  
										$hora           = $leitor['hora'];  
										$aluguel        = $leitor['aluguel'];
										$img_1          = $leitor['img_1'];

										$texto=explode("-",$dt_inicio);

										if($texto[1] == "1" || $texto[1] == "01" )$texto[1] = "Janeiro";else if($texto[1] == "2" || $texto[1] == "02") $texto[1] = "Fevereiro";else if($texto[1] == "3" || $texto[1] == "03")$texto[1] = "Março";else if($texto[1] == "4" || $texto[1] == "04")$texto[1] = "Abril";else if($texto[1] == "5" || $texto[1] == "05")$texto[1] = "Maio" ;else if($texto[1] == "6" || $texto[1] == "06")$texto[1] = "Junho";else if($texto[1] == "7" || $texto[1] == "07")$texto[1] = "Julho";else if($texto[1] == "8" || $texto[1] == "08")$texto[1] = "Agosto";else if($texto[1] == "9" || $texto[1] == "09")$texto[1] = "Setembro";else if($texto[1] == "10")$texto[1] = "Outubro";else if($texto[1] == "11")$texto[1] = "Novembro";else if($texto[1] == "12")$texto[1] = "Desembro";
										if($tipo == "Apartamento")$tipo = "AP";

										$dt_publicado = "Publicado no dia ".$texto[2]." de ".$texto[1]." de ".$texto[0]." as ".$hora;

												?>	

										<div id="img_escolha" class="6u">
										
												<article style="height:155px;" class="box box-standard post-small2">
													<h2><?php echo strtoupper($tipo)?> / <?php echo strtoupper($bairro)?> / R$ <?php echo strtoupper($aluguel)?></h2>
													
													<div id="visualizar" style="float:left;margin-right:5px;margin-left:-15px;margin-top:-15px;width:150px;height:120px;">
													<a href="detalhes_aluga-se.php?cod=<?php echo $id?>&pagina=<?php echo $pagina?>" ><img src="fotos/<?php echo $img_1?>" alt="" /></a>
													</div>

														<p style="margin-top:-10px;"><?php echo substr($descricao,0,90);?> [...]
														<br>Ponto de referência : <?php echo substr($referencia,0,40);?>[...]
														
														<?php echo $dt_publicado;?>
															<a style="float:left;"href="detalhes_aluga-se.php?cod=<?php echo $id?>&pagina=<?php echo $pagina?>" ><span style="font-size:15px;margin-left:30px">Visualizar</span>
														</a>
												</article>
										
										</div>

							<?
								}//fecha laço
							?>


							<div class="row">
								<div class="12u">
								
									<!-- Post -->
										<article class="box box-standard box-content">
											
											<?php

												
												$anterior = $pagina -1;
												$proximo  = $pagina +1;
												
												echo "<a style=\"width:80px;background-color:#FF4D4D;\" href=\"#\" class=\"button\"> $pagina de $tp </a>";
												if ($pagina>0){
													
											?>

													<a href="aluga-se.php?pagina=<?php echo $anterior?>" class="button">Anterior</a>

							<?php
												
												}
												
												if ($pagina<$tp){
													?>

													<div style="float:right;" ><a href="aluga-se.php?pagina=<?php echo $proximo?>" class="button">Próximo</a></div>

													<?
												
												}

										     ?>
											
										</article>
								
								</div>
							</div>

						</div><!-- Fecha contet-->

						<div class="4u" id="sidebar">

						<!-- Posts -->
								<section class="box box-standard box-mini-posts">
									<h2>Quer divulgar uma vaga ?</h2>
									<div class="5grid">
										<div class="row">
											<div class="6u">
												<article class="left">
													<h3><a href="cadastrar.php">1º Passo Cadastro </a></h3>
													<p>Cadastre-se conosco e desfrute de nossos serviços.</p>
												</article>
											</div>
											<div class="6u">
												<article class="right">
													<h3><a href="entrar.php">2º Passo Login</a></h3>
													<p>Caso você ja tenha uma conta faça o login.</p>
												</article>
											</div>
										</div>
										
									</div>
									<a style="margin-left:30px" href="anunciar_moradia.php" class="button">Pronto faça seu anuncio gratuito agora ...</a>
								</section>

							<!-- Posts -->
								<section class="box box-standard box-mini-posts">
									<h2>Casas em Destaques</h2>
									<div class="5grid">
										<div class="row">
											<div class="6u">
												<article class="left">
													<a href="#" class="image image-full"><img src="images/casa5.png" alt="" /></a>
													<h3><a href="#">Jaguaribe</a></h3>
													<p>Boa localização a partir de 800 reas mensais, anuncio Fictício somente para preenchimento .</p>
												</article>
											</div>
											<div class="6u">
												<article class="right">
													<a href="#" class="image image-full"><img src="images/casa2.jpg" alt="" /></a>
													<br>
													<h3><a href="#">Vila Albertina</a></h3>
													<p>Boa localização a partir de 800 reas mensais, anuncio Fictício somente para preenchimento .</p>
												</article>
											</div>
										</div>
										<div class="row">
											<div class="6u">
												<article class="left">
													<a href="#" class="image image-full"><img src="images/casa3.png" alt="" /></a>
													<br>
													<h3><a href="#">Vila Sodipe</a></h3>
													<p>Boa localização a partir de 800 reas mensais, anuncio Fictício somente para preenchimento .</p>
												</article>
											</div>
											<div class="6u">
												<article class="right">
													<a href="#" class="image image-full"><img src="images/casa4.png" alt="" /></a>
													<h3><a href="#">Jardim Sumaré</a></h3>
													<p>Boa localização a partir de 800 reas mensais, anuncio Fictício somente para preenchimento .</p>
												</article>
											</div>
										</div>
									</div>
									<a href="#" class="button">Ver Outras em Destaques ...</a>
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