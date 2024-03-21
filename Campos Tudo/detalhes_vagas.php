<?php 	session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

	<head>

		<title>Campos Vagas</title>
		<meta name="description" content="Emprego em Campos do Jordão, é na Campos Tudo, veja, compartilhe e participe.">
		<meta content="Vagas de emprego em Campos do Jordão, as melhores dicas de vagas em Campos do Jordão esta na Campos Tudo, olhe, compartilhe e participe." property="og:description">


		<?php include "head.php" ?>



		<script>
	
			$(function(){

				$('#bt_anunciar').click(function(){

					if($('#setado').val() == 'true')
						window.location = "anunciar.php";
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
							<div class="row">
								<div class="12u">
								
									<!-- Post -->
										<article class="box box-standard box-content">
											<h2>Vagas Disponiveis</h2>
										
												
														 <div id="saida_vagas">

			     <?php

			     	include "conexao.php";

			     	
			     	if (!(isset($_GET['pagina']))) {
						
						$pagina = "0";
					
					} 
					else
						$pagina = $_GET['pagina'];

					if (!(isset($_GET['n_vaga']))) {
						$n_vaga = "0";
					} 
					else
						$n_vaga = $_GET['n_vaga'];
					
					
					$sql = mysql_query("select * from emprega where id= '$n_vaga'");
					
					$nextANDbefore = mysql_query("SELECT * FROM emprega WHERE id = '$n_vaga' OR id = (SELECT MAX(id) FROM emprega WHERE id < '$n_vaga') OR id = (SELECT MIN(id) FROM emprega WHERE id > '$n_vaga')");
					
					$anterior = '';

					while ($leitor2 = mysql_fetch_array($nextANDbefore)) {
						
						if($anterior == '')
							$anterior = $leitor2['id'];
						else
							$proximo = $leitor2['id'];
						
					}

					while ($leitor = mysql_fetch_array($sql)) {
							
						$id    			= $leitor['id'];
						$cargo          = $leitor['cargo'];   
						$cidade_atuacao = $leitor['cidade_atuacao'];
						$empresa        = $leitor['empresa'];
						$estado         = $leitor['estado'];
						$salario        = $leitor['salario'];
						$qtd_vagas      = $leitor['qtd_vagas'];  
						$requisitos     = $leitor['requisitos'];  
						$dt_inicio      = $leitor['dt_inicio'];  
						$hora           = $leitor['hora'];  
						$atribuicao     = $leitor['atribuicao'];
						$beneficios     = $leitor['beneficios'];
						$outras_info    = $leitor['outras_info'];
						$dt_fim         = $leitor['dt_fim'];
						$remetente      = $leitor['remetente'];
						$tipo_envio     = $leitor['tipo_envio'];
						$email          = $leitor['tipo_envio'];
						$assunto        = $leitor['assunto'];

						$newDate = date("d-m-Y", strtotime($dt_fim));


						$texto=explode("-",$dt_inicio);

if($texto[1] == "1" || $texto[1] == "01" )$texto[1] = "Janeiro";else if($texto[1] == "2" || $texto[1] == "02") $texto[1] = "Fevereiro";else if($texto[1] == "3" || $texto[1] == "03")$texto[1] = "Março";else if($texto[1] == "4" || $texto[1] == "04")$texto[1] = "Abril";else if($texto[1] == "5" || $texto[1] == "05")$texto[1] = "Maio" ;else if($texto[1] == "6" || $texto[1] == "06")$texto[1] = "Junho";else if($texto[1] == "7" || $texto[1] == "07")$texto[1] = "Julho";else if($texto[1] == "8" || $texto[1] == "08")$texto[1] = "Agosto";else if($texto[1] == "9" || $texto[1] == "09")$texto[1] = "Setembro";else if($texto[1] == "10")$texto[1] = "Outubro";else if($texto[1] == "11")$texto[1] = "Novembro";else if($texto[1] == "12")$texto[1] = "Desembro";
						

						$dt_publicado = "Publicado no dia ".$texto[2]." de ".$texto[1]." de ".$texto[0]." as ".$hora;

					?>	

						<div style="font-size:16px;color:#000;">

							<strong ><span style="color:#000; font-size:25px;"><?php echo strtoupper($cargo); ?> / <?php echo $qtd_vagas;?>  VAGA(S) / <?php echo strtoupper($cidade_atuacao); ?></span></strong>
							<br>
							<br>
							<?php echo $empresa?> está com <?php echo $qtd_vagas?> vaga(s) em aberto em <?php echo $cidade_atuacao?> / <?php echo $estado?>
							<br><br>
							
							<strong style="font-size:18px;">Responsabilidades:</strong> <?php  echo $atribuicao;?><br><br>
							<strong style="font-size:18px;">Sálario:</strong> <?php  echo $salario;?><br><br>
							<strong style="font-size:18px;">Observações:</strong> <?php  echo $outras_info;?><br><br>
							
							Os Candidatos interessados deverão encaminhar o currículo aos cuidados de <?php echo $remetente ?> para o e-mail <?php echo $email?> com o assunto [<?php echo $assunto?>] até o dia <?php echo $newDate?> .
							<br><br><br>
							<?php echo $dt_publicado?>
							<br>
						<hr>
						</div>
					<?php

					}
					


						
?>

						<a href="vagas.php?pagina=<?php echo $pagina?>" class="button">Voltar a Lista	</a>
						
						<a href="detalhes_vagas.php?n_vaga=<?php echo $anterior?>&pagina=<?php echo $pagina?>" class="button">Anterior</a>

						<div style="float:right;margin-right:0px;" >
						<a href="detalhes_vagas.php?n_vaga=<?php echo $proximo?>&pagina=<?php echo $pagina?>" class="button">Próximo</a></div>
	     
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

							<!-- Posts -->
								<section class="box box-standard box-mini-posts">
									<h2>Dolore consequat</h2>
									<div class="5grid">
										<div class="row">
											<div class="6u">
												<article class="left">
													<a href="#" class="image image-full"><img src="images/pic14.jpg" alt="" /></a>
													<h3><a href="#">Magna sed et feugiat</a></h3>
													<p>Lorem ipsum nullam dolor sit amet, varius sed nulla lorem amet tempus consequat.</p>
												</article>
											</div>
											<div class="6u">
												<article class="right">
													<a href="#" class="image image-full"><img src="images/pic15.jpg" alt="" /></a>
													<h3><a href="#">Magna sed et feugiat</a></h3>
													<p>Lorem ipsum nullam dolor sit amet, varius sed nulla lorem amet tempus consequat.</p>
												</article>
											</div>
										</div>
										<div class="row">
											<div class="6u">
												<article class="left">
													<a href="#" class="image image-full"><img src="images/pic16.jpg" alt="" /></a>
													<h3><a href="#">Magna sed et feugiat</a></h3>
													<p>Lorem ipsum nullam dolor sit amet, varius sed nulla lorem amet tempus consequat.</p>
												</article>
											</div>
											<div class="6u">
												<article class="right">
													<a href="#" class="image image-full"><img src="images/pic17.jpg" alt="" /></a>
													<h3><a href="#">Magna sed et feugiat</a></h3>
													<p>Lorem ipsum nullam dolor sit amet, varius sed nulla lorem amet tempus consequat.</p>
												</article>
											</div>
										</div>
									</div>
									<a href="#" class="button">Browse Archives</a>
								</section>

							<!-- More Posts -->
								<section class="box box-standard">
									<h2>Dolore consequat</h2>
									<ul class="style1">
										<li>
											<article>
												<h3><a href="#">Consequat feugiat lorem ipsum veroeros</a></h3>
												<p>Lorem ipsum sed dolor sit amet, varius et nulla lorem amet sed 
												ipsum amet dolor tellus quis donec feugiat varius.</p>
											</article>
										</li>
										<li>
											<article>
												<h3><a href="#">Scelerisque donec ligula accumsan</a></h3>
												<p>Lorem ipsum sed dolor sit amet, varius et nulla lorem amet sed 
												ipsum amet dolor tellus quis donec feugiat varius.</p>
											</article>
										</li>
										<li>
											<article>
												<h3><a href="#">Nam ut tellus sagittis lorem ipsum dolor</a></h3>
												<p>Lorem ipsum sed dolor sit amet, varius et nulla lorem amet sed 
												ipsum amet dolor tellus quis donec feugiat varius.</p>
											</article>
										</li>
									</ul>
									<a href="#" class="button">Browse Archives</a>
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