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
										
												
														 <div id="saida_vagas">

			     <?php

			     	include "conexao.php";

			     	
			     	if (!(isset($_GET['pagina']))) {
						
						$pagina = "0";
					
					} 
					else
						$pagina = $_GET['pagina'];

					if (!(isset($_GET['cod']))) {
						$cod = "0";
					} 
					else
						$cod = $_GET['cod'];
					
					
					$sql = mysql_query("select * from aluga where id= '$cod'");
					
					$nextANDbefore = mysql_query("SELECT * FROM aluga WHERE id = '$cod' OR id = (SELECT MAX(id) FROM aluga WHERE id < '$cod') OR id = (SELECT MIN(id) FROM aluga WHERE id > '$cod')");
					
					$anterior = '';

					while ($leitor2 = mysql_fetch_array($nextANDbefore)) {
						
						if($anterior == '')
							$anterior = $leitor2['id'];
						else
							$proximo = $leitor2['id'];
						
					}

					while ($leitor = mysql_fetch_array($sql)) {
							
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
						$img_2          = $leitor['img_2'];
						$img_3          = $leitor['img_3'];
						$email1         = $leitor['email1'];
						$email2         = $leitor['email2'];
						$telefone1      = $leitor['telefone1'];
						$telefone2	    = $leitor['telefone2'];
						$outras_info    = $leitor['outras_info'];
						$acomoda        = $leitor['acomoda'];
						$vagas          = $leitor['vagas'];
						$banheiros      = $leitor['banheiros'];
						$quartos        = $leitor['quartos'];
						$anunciante     = $leitor['anunciante'];
						

						$texto=explode("-",$dt_inicio);

if($texto[1] == "1" || $texto[1] == "01" )$texto[1] = "Janeiro";else if($texto[1] == "2" || $texto[1] == "02") $texto[1] = "Fevereiro";else if($texto[1] == "3" || $texto[1] == "03")$texto[1] = "Março";else if($texto[1] == "4" || $texto[1] == "04")$texto[1] = "Abril";else if($texto[1] == "5" || $texto[1] == "05")$texto[1] = "Maio" ;else if($texto[1] == "6" || $texto[1] == "06")$texto[1] = "Junho";else if($texto[1] == "7" || $texto[1] == "07")$texto[1] = "Julho";else if($texto[1] == "8" || $texto[1] == "08")$texto[1] = "Agosto";else if($texto[1] == "9" || $texto[1] == "09")$texto[1] = "Setembro";else if($texto[1] == "10")$texto[1] = "Outubro";else if($texto[1] == "11")$texto[1] = "Novembro";else if($texto[1] == "12")$texto[1] = "Desembro";
						
						$dt_publicado = "Publicado no dia ".$texto[2]." de ".$texto[1]." de ".$texto[0]." as ".$hora;

					?>	

						<div style="font-size:16px;color:#000;">

							<h2 ><?php echo strtoupper($tipo); ?> / <?php echo strtoupper($bairro);?> / R$ <?php echo strtoupper($aluguel); ?></h2>
							

										
<?php 								
											 if($img_1 != '' || $img_2 != '' || $img_3 != '' )
											 {
																								?>	

												<section class="box box-features">
													<ul class="tabs">
													<?php

													if($img_1 != '')
														echo "<li><a href=\"#one\" class=\"active\"> 1 </a></li>";
													if($img_2 != '')
														echo "<li><a href=\"#two\"> 2 </a></li>";
													if($img_3 != '')
														echo "<li><a href=\"#three\"> 3 </a></li>";
													
													?>
													</ul>
													<div class="viewer">
														<div class="reel">

														<?php

													if($img_1 != '')
														echo "<article id=\"one\" style=\"margin-top:60px;\">
																<img src=\"fotos/$img_1\"/>
															</article>";
													if($img_2 != '')
														echo "<article id=\"two\" style=\"margin-top:60px;\">
																<img src=\"fotos/$img_2\"/>
															</article>";
													if($img_3 != '')
														echo "<article id=\"three\" style=\"margin-top:60px;\">
																<img src=\"fotos/$img_3\"/>
															</article>";
												
													?>
														</div>
													</div>	
												</section>
											<?php
											} // fecha imagens
											?>

								
							<label style="text-align:justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Localizada em <?php echo $endereco?> no bairro <?php echo $bairro?>, acomoda até <?php  echo $acomoda;?> pessoas, <?php
							if($vagas == '')
								echo "não possui garagem, ";
							else
								echo "possui garagem com $vagas vagas,"
							?> a também <?php echo $banheiros?> banheiro(s) e <?php echo $quartos?> quarto(s) .</label>

							<label><i style="font-style:italic;text-decoration:underline;">Ponto de Referência :</i> <?php  echo $referencia;?> </label>
							<label><i style="font-style:italic;text-decoration:underline;">Descrição :</i></strong> <?php  echo $descricao;?><br><br>
							<label><i style="font-style:italic;text-decoration:underline;">Outras Informações :</i></strong> <?php  echo $outras_info;?><br><br>
							
							<label style="font-size:20px">Contato com o anunciante</label>
							<hr>

							<label>Email : <?php  echo $email1;?>
							<?php if($email2 != '')
									echo "<br>Email : $email2"
							?></label>
							<label>Telefone :  <?php  echo $telefone1;?>
							<?php if($telefone2 != '')
									echo "<br>Telefone : $telefone2"
							?></label>

							<label>Falar com <?php  echo $anunciante;?> , Obrigado.
							</label>
							
							<br><br><br>
							<i style="font-style:italic;"><?php echo $dt_publicado?></i>
							<br>	
						<hr>
						</div>
					<?php

					}
					


						
?>

						<a href="aluga-se.php?pagina=<?php echo $pagina?>" class="button">Voltar a Lista	</a>
						
						<a href="detalhes_aluga-se.php?cod=<?php echo $anterior?>&pagina=<?php echo $pagina?>" class="button">Anterior</a>

						<div style="float:right;margin-right:0px;" >
						<a href="detalhes_aluga-se.php?cod=<?php echo $proximo?>&pagina=<?php echo $pagina?>" class="button">Próximo</a></div>
	     
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