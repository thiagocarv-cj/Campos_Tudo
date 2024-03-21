<?php 	
	session_start(); 
	if(isset($_SESSION["nome_user"]) AND isset($_SESSION['email_user'])) 
	{
		$nome 	= $_SESSION["nome_user"];
		$email  = $_SESSION['email_user'];



		$id_usuario = $_SESSION['id_user'];
		$sobrenome  = $_SESSION['sobrenome'];
		$empresa    = $_SESSION['empresa'];
		$foto       = $_SESSION['foto'];
		$data       = $_SESSION['data'];


	}
	else
		header('Location:entrar.php?cod=withouttwo');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>

		<title>Campos Tudo</title>
		<meta name="description" content="Tudo relacionado a Campos do Jordão, é na Campos Tudo veja, compartilhe e participe.">
		<meta content="Alugue Casas, Veja vagas de Emprego dicas e muito mais na Campos Tudo, olhe, compartilhe e participe." property="og:description">
		
		<?php include "head.php" ?>
		
		<script type="text/javascript" src="eventos/eventos_my_page.js"></script>
		<script type="text/javascript" src="js/jquery.form.js"></script>

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
									

									<?
										if($foto == '')
											$foto = "anonimo.jpg";
										if($empresa == '')
											$empresa = "não consta";


										$texto=explode("-",$data);

										if($texto[1] == "1" || $texto[1] == "01" )$texto[1] = "Janeiro";else if($texto[1] == "2" || $texto[1] == "02") $texto[1] = "Fevereiro";else if($texto[1] == "3" || $texto[1] == "03")$texto[1] = "Março";else if($texto[1] == "4" || $texto[1] == "04")$texto[1] = "Abril";else if($texto[1] == "5" || $texto[1] == "05")$texto[1] = "Maio" ;else if($texto[1] == "6" || $texto[1] == "06")$texto[1] = "Junho";else if($texto[1] == "7" || $texto[1] == "07")$texto[1] = "Julho";else if($texto[1] == "8" || $texto[1] == "08")$texto[1] = "Agosto";else if($texto[1] == "9" || $texto[1] == "09")$texto[1] = "Setembro";else if($texto[1] == "10")$texto[1] = "Outubro";else if($texto[1] == "11")$texto[1] = "Novembro";else if($texto[1] == "12")$texto[1] = "Desembro";

										$aroba=explode("@",$email);
										$email = $aroba[0];
										
													

										$membro = "Membro desde <br>".$texto[2]." de ".$texto[1]." de ".$texto[0];
									?>
									<!-- Post -->
										<article class="box box-standard box-content">
											
											<div id="hoverdiv" style="display: none;position: absolute;font-size: 14px;background-color: #fff;color: #404040;border: 1px solid #999;padding: 7px;"></div>	

											<div id="dados" style="float:left;margin-right:20px;">
												
												<div id="img_escolha">
														
														<a style="text-decoration:none" id="link_alt_img_face" class="hover" href="#" hovertext="Alterar imagem .">
															<div id="visualizar" style="width:190px;height:130px;"><img src="fotos/<?php echo $foto?>"/></div>
														</a>

														<input type="hidden" id="muda_" value="1"/>
												</div>

												<form style="display:none;" id="formulario_face" method="post" enctype="multipart/form-data" action="upload_face.php">
													<input type="file"  name="imagem_face" id="imagem_face" style="margin-left:15px;width:155px;background:#FFFFFF;font-size:1.2em;" />
													<input type="hidden" id="img_face" name="img_face" value="<?php echo $foto?>"/>
													<input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario?>"/>

												</form>
												
													<label style="text-transform: capitalize;"><?php echo substr($nome.' '.$sobrenome,0,20); ?></label>
													<labe>
													<?php echo substr($email.'@',0,23); ?><br>
													<i style="font-style:italic;"><?php echo $membro; ?></i><br>
												</div>

								
											<div id="dados" style="">
											
											</div>


											<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

											<input type="hidden" id="nome_user"  value="<?php echo $nome?>"/>

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
	</body>
</html>