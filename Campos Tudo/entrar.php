<?php 	session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

	<head>

		<title>Campos Tudo</title>
		<meta name="description" content="Tudo relacionado a Campos do Jordão, é na Campos Tudo veja, compartilhe e participe.">
		<meta content="Alugue Casas, Veja vagas de Emprego dicas e muito mais na Campos Tudo, olhe, compartilhe e participe." property="og:description">


		<?php include "head.php" ?>

		<script type="text/javascript" src="eventos/eventos_entrar.js"></script>

		<script>
			function alerta(msg)
			{
				alertify.set({ labels: { ok: "Tudo Bem !", cancel: "Deny" } });
				alertify.alert("<span style=\"font-size:22px\">"+msg+"</span>");
			}
		</script>


	</head>
	
	<body>

		<?php include "topo.php";
		
			if(isset($_GET['cod']))
					if($_GET['cod'] == "without")
						echo "<script>alerta('Para publicar uma vaga você deve se logar ou caso não tenha uma conta se cadastrar .')</script>";
					if($_GET['cod'] == "withouttwo")
 						echo "<script>alerta('Para fazer um anuncio, você deve se logar ou caso não tenha uma conta se cadastrar .')</script>";

		?>
		
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
											<h2>Faça seu Login</h2>
											            

												<div id="div_login">
										            <table align="center" width="600" border="0">

														  <tr align="right">
															<td  width="150" scope="col"><label>Email : </label></td>
															<td align="left" width="450" scope="col"><input id="email1" type="email" style="margin-top:30px;margin-left:20px">
														  </td>
														  <tr align="right">
															<td  width="150" scope="col"><label>Senha :</label></td>
															<td align="left" width="450" scope="col"> <input type="password"id="senha" style="width:300px;margin-top:20px;margin-left:20px;">
														  </td>

														  <tr align="right">
															<td  width="150" scope="col"><label></label></td>
															<td align="left" width="" scope="col">
															<a href="#" style="float:right;margin-top:40px;margin-right:0px;" id="bt_entrar" class="button">Entrar</a>
															<a href="cadastrar.php" style="float:right;margin-top:40px;margin-right:20px;" class="button">Cadastrar</a></p>

													</table>
													<br>
									            <h4 align="right" style="margin-right:40px;font-size:20px;text-transform: capitalize;">Esqueceu sua senha ? <a href="#" id="bt_esqueci_senha" rel="nofollow">Click Aqui</a></h4>
												</div>
												<div id="div_esqueci"  style="display:none">
									            <h4 style="margin-left:90px;margin-top:40px;font-size:20px;">Digite seu email de login para recuperar sua senha .</h4>
										            <table align="center" width="600" border="0">

														  <tr align="right">
															<td  width="150" scope="col"><label>Email : </label></td>
															<td align="left" width="450" scope="col"><input id="email_recuperacao" type="text" style="margin-top:30px;margin-left:20px">
														  </td>
														  <tr align="right">
															<td  width="150" scope="col"><label></label></td>
															<td align="left" width="" scope="col">
															<a href="#" style="float:right;margin-top:40px;margin-right:0px;" id="bt_enviar_senha" class="button">Recuper minha senha</a></p>

													</table>
													<br>
									            <h4 align="right" style="margin-right:40px;font-size:20px;text-transform: capitalize;"><a href="#" id="bt_voltar_login"rel="nofollow">Voltar</a></h4>

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
			<img id="carregando" style="display:none;position: absolute;top:65%;left:50%;" src="images/loading.gif"  alt="" />
	</body>
</html>