<?php 	session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

	<head>

		<title>Campos Emprega</title>
		<meta name="description" content="Emprego em Campos do Jordão, é na Campos Tudo, veja, compartilhe e participe.">
		<meta content="Vagas de emprego em Campos do Jordão, as melhores dicas de vagas em Campos do Jordão esta na Campos Tudo, olhe, compartilhe e participe." property="og:description">



		<?php include "head.php" ?>

		<script>
	
			$(function(){

				$('.anunciante').mousemove(function(e){

					$(this).addClass('selecionado2');

				}).mouseout(function() {
					$('.anunciante').removeClass('selecionado2');
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
							<div class="row">
								<div class="12u">
								
									<!-- Post -->
										<article class="box box-standard box-content">
											<h2>Vagas Disponiveis</h2>
										
									
											<div id="saida_vagas">

										     <?php

										     	include "conexao.php";

										     	$busca = "SELECT * FROM emprega";
										     	$total_reg = "15";

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
													$cargo          = $leitor['cargo'];   
													$cidade_atuacao = $leitor['cidade_atuacao'];
													$empresa        = $leitor['empresa'];
													$qtd_vagas      = $leitor['qtd_vagas'];  
													$requisitos     = $leitor['requisitos'];  
													$dt_inicio      = $leitor['dt_inicio'];  
													$hora           = $leitor['hora'];  
													$atribuicao     = $leitor['atribuicao'];

													$texto=explode("-",$dt_inicio);

										if($texto[1] == "1" || $texto[1] == "01" )$texto[1] = "Janeiro";else if($texto[1] == "2" || $texto[1] == "02") $texto[1] = "Fevereiro";else if($texto[1] == "3" || $texto[1] == "03")$texto[1] = "Março";else if($texto[1] == "4" || $texto[1] == "04")$texto[1] = "Abril";else if($texto[1] == "5" || $texto[1] == "05")$texto[1] = "Maio" ;else if($texto[1] == "6" || $texto[1] == "06")$texto[1] = "Junho";else if($texto[1] == "7" || $texto[1] == "07")$texto[1] = "Julho";else if($texto[1] == "8" || $texto[1] == "08")$texto[1] = "Agosto";else if($texto[1] == "9" || $texto[1] == "09")$texto[1] = "Setembro";else if($texto[1] == "10")$texto[1] = "Outubro";else if($texto[1] == "11")$texto[1] = "Novembro";else if($texto[1] == "12")$texto[1] = "Desembro";
													

													$dt_publicado = "Publicado no dia ".$texto[2]." de ".$texto[1]." de ".$texto[0]." as ".$hora;

												?>	

													<div style="" id="vaga<?php echo $id;?>" >

														<a style="text-decoration:none"href="detalhes_vagas.php?n_vaga=<?php echo $id?>&pagina=<?php echo $pagina?>" ><strong class="anunciante"><span style="color:#000; font-size:18px;"><?php echo strtoupper($cargo); ?> / <?php echo $qtd_vagas;?>  VAGA(S) / <?php echo strtoupper($cidade_atuacao); ?></span></strong></a>
														<br>
														<?php echo $empresa?> está com <?php echo $qtd_vagas?> vaga(s) em aberto  | Responsabilidades: <?php  echo substr($atribuicao,0,60);?> [...]
														<br><br>


														<?php echo $dt_publicado?>
														<br>
													<hr>
													</div>
												<?php

												}
												$anterior = $pagina -1;
												$proximo  = $pagina +1;
												
												echo "<a style=\"width:80px;background-color:#FF4D4D;\" href=\"#\" class=\"button\"> $pagina de $tp </a>";
												if ($pagina>0){
													
							?>

													<a href="vagas.php?pagina=<?php echo $anterior?>" class="button">Anterior</a>

							<?php
												
												}
												
												if ($pagina<$tp){
													?>

													<div style="float:right;" ><a href="vagas.php?pagina=<?php echo $proximo?>" class="button">Próximo</a></div>

													<?
												
												}

										     ?>
										     
										     </div>    

										</article>
								
								</div>
							</div>
							<div class="row">
								<div class="6u">
								
									<!-- Mini Post -->
										<article class="box box-standard post-small">
											<h2>Feugiat</h2>
											<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
											<div>
												<h3><a href="#">Adipiscing feugiat ipsum?</a></h3>
												<p>Nam ut tellus quis mauris sagittis hendrerit eu vel ligula. Nulla accumsan 
												erat in neque Donec in sem velit, nec scelerisque.</p>
											</div>
										</article>
								
								</div>
								<div class="6u">
								
									<!-- Mini Post -->
										<article class="box box-standard post-small">
											<h2>Accumsan</h2>
											<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
											<div>
												<h3><a href="#">Lorem ipsum dolore</a></h3>
												<p>Nam ut tellus quis mauris sagittis hendrerit eu vel ligula. Nulla accumsan 
												erat in neque Donec in sem velit, nec scelerisque.</p>
											</div>
										</article>
								
								</div>
							</div>
							<div class="row">
								<div class="6u">
								
									<!-- Mini Post -->
										<article class="box box-standard post-small">
											<h2>Tempus</h2>
											<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
											<div>
												<h3><a href="#">Blandit feugiat consequat</a></h3>
												<p>Nam ut tellus quis mauris sagittis hendrerit eu vel ligula. Nulla accumsan 
												erat in neque Donec in sem velit, nec scelerisque.</p>
											</div>
										</article>
								
								</div>
								<div class="6u">
								
									<!-- Mini Post -->
										<article class="box box-standard post-small">
											<h2>Lorem</h2>
											<a href="#" class="image"><img src="images/pic10.jpg" alt="" /></a>
											<div>
												<h3><a href="#">Hendrerit tellus lorem</a></h3>
												<p>Nam ut tellus quis mauris sagittis hendrerit eu vel ligula. Nulla accumsan 
												erat in neque Donec in sem velit, nec scelerisque.</p>
											</div>
										</article>
								
								</div>
							</div>
							<div class="row">
								<div class="6u">
								
									<!-- Mini Post -->
										<article class="box box-standard post-small">
											<h2>Hendrerit</h2>
											<a href="#" class="image"><img src="images/pic11.jpg" alt="" /></a>
											<div>
												<h3><a href="#">Tellus quis lorem</a></h3>
												<p>Nam ut tellus quis mauris sagittis hendrerit eu vel ligula. Nulla accumsan 
												erat in neque Donec in sem velit, nec scelerisque.</p>
											</div>
										</article>
								
								</div>
								<div class="6u">
								
									<!-- Mini Post -->
										<article class="box box-standard post-small">
											<h2>Nullam</h2>
											<a href="#" class="image"><img src="images/pic12.jpg" alt="" /></a>
											<div>
												<h3><a href="#">Ligula dolore lorem</a></h3>
												<p>Nam ut tellus quis mauris sagittis hendrerit eu vel ligula. Nulla accumsan 
												erat in neque Donec in sem velit, nec scelerisque.</p>
											</div>
										</article>
								
								</div>
							</div>
						</div>
						<div class="4u" id="sidebar">

						<!-- Curriculo -->
								<section class="box box-standard">
									<h2>Não tem currículo ?</h2>
									<ul class="style1">
										<li>
											<article>
												<h3>Baixe 3 modelos Agora.</h3>
												<p>Separamos alguns modelos de currículos com nomes e dados fantasias, basta fazer seu preenchimento e utilizalos.</p>
											</article>
										</li>
										
									</ul>
									<a href="http://db.tt/9YmiS4dY" class="button">Fazer Download</a>
								</section>

							<!-- Posts -->
								<section class="box box-standard box-mini-posts">
									<h2>Quer divulgar uma vaga ?</h2>
									<div class="5grid">
										<div class="row">
											<div class="6u">
												<article class="left">
													<a href="#" class="image image-full"><img src="images/pic14.jpg" alt="" /></a>
													<h3><a href="cadastrar.php">1º Passo Cadastro </a></h3>
													<p>Crie um cadastro conosco e desfrute de todos nossos serviços.</p>
												</article>
											</div>
											<div class="6u">
												<article class="right">
													<a href="#" class="image image-full"><img src="images/pic15.jpg" alt="" /></a>
													<h3><a href="entrar.php">2º Passo Login</a></h3>
													<p>Caso você ja tenha uma conta faça o login.</p>
												</article>
											</div>
										</div>
										
									</div>
									<a href="anunciar.php" class="button">Pronto Anunciar Vaga</a>
								</section>
							
							<!-- Links -->
								<section class="box box-standard box-links">
									<h2>Pulvinar feugiat</h2>
									<div class="5grid 5grid-flush">
										<div class="row">
											<div class="6u">
												<ul class="left">
													<li><a href="#">Quisque pulvinar</a></li>
													<li><a href="#">Sodales amet quam</a></li>
													<li><a href="#">Pellentesque nisl</a></li>
													<li><a href="#">Venenatis pharetra</a></li>
													<li><a href="#">Sed et vestibulum</a></li>
													<li><a href="#">Aliquam et vehicula</a></li>
													<li><a href="#">Dolore sed feugiat</a></li>
												</ul>
											</div>
											<div class="6u">
												<ul class="right">
													<li><a href="#">Quisque pulvinar</a></li>
													<li><a href="#">Sodales amet quam</a></li>
													<li><a href="#">Pellentesque nisl</a></li>
													<li><a href="#">Venenatis pharetra</a></li>
													<li><a href="#">Sed et vestibulum</a></li>
													<li><a href="#">Aliquam et vehicula</a></li>
													<li><a href="#">Dolore sed feugiat</a></li>
												</ul>
											</div>
										</div>
									</div>
								</section>

							<!-- Video -->
								<section class="box box-standard box-video">
									<h2>Vehicula lorem</h2>
									<!--
										Replace the line below with your IFRAME, EMBED, or VIDEO tag.
										Don't worry about giving it a width or height as the design
										will automatically size it to fit the sidebar.
									-->
									<a href="#" class="image image-full"><img src="images/pic13.jpg" alt="" /></a>
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