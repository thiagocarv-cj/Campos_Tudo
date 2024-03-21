<?php 	
	session_start(); 
	if(isset($_SESSION["nome_user"]) AND isset($_SESSION['email_user'])) 
	{
		$nome 	= $_SESSION["nome_user"];
		$email  = $_SESSION['email_user'];	
	}
	else
		header('Location:entrar.php?cod=withouttwo');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

	<head>

		<title>Campos Anuncia</title>
		<meta name="description" content="Casas pra alugar em Campos do Jordão, é na Campos Tudo, veja, compartilhe e participe.">
		<meta content="Casas e apartamentos para alugar em Campos do Jordão, as melhores dicas esta na Campos Tudo, olhe, compartilhe e participe." property="og:description">



		<?php include "head.php" ?>


	    <script type="text/javascript" src="eventos/eventos_anunciar_moradia.js"></script>
	    <script type="text/javascript" src="js/jquery.form.js"></script>
	    <script type="text/javascript" src="js/jquery.price_format.js"></script>


		    <script type="text/javascript">
		  

				function mascara(o,f){
			            v_obj=o
			            v_fun=f
			            setTimeout("execmascara()",1)
			        }
			        function execmascara(){
			            v_obj.value=v_fun(v_obj.value)
			        }
			        function mtel(v){
			            v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
			            v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
			            v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
			            return v;
			        }
			        function id( el ){
			        	return document.getElementById( el );
			        }
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
			        window.onload = function(){
			        	id('in_tel1').onkeypress = function(){
			        		mascara( this, mtel );
			        	}
			        	id('in_tel2').onkeypress = function(){
			        		mascara( this, mtel );
			        	}
			    	}

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
											<h2 style="text-transform: capitalize;">Publicar anuncio Olá, <?php  echo $nome;?>. <a href="" rel="nofollow">Meus Dados</a></h2>
	
										<label style="font-size:20px">Detalhes sobre a Localização </label>
										<hr><br>
										<table align="center" width="700" border="0">

											  <tr align="right">
												<td  width="150" scope="col"><label>Endereço :</label></td>
												<td align="left" width="450" scope="col"> <input type="text" id="in_endereco" placeholder="" style="margin-left:15px;"  />
											  </td>

									   		  <tr align="right">
												<td  width="150" scope="col"><label>Bairro :</label></td>
												<td align="left"  scope="col"> <input type="text" id="in_bairro" placeholder="" style="margin-left:15px;width:300px;"   />
											  </td>

											  <tr align="right">
												<td  width="150" scope="col"><label>Tipo :</label></td>
												<td align="left"  scope="col">
													<select id="cb_tipo" style="height:37px;font-size:15px;margin-left:15px;width:150px;">
									              		<option value="tipo_casa">Casa</option>
									                    <option value="tipo_ap">Apartamento</option>
									                    <option value="Sitio">Sitio</option>
									             </select>
											  </td>

											  <tr align="right">
												<td  width="150" scope="col"><label>Ponto de Refêrencia :</label></td>
												<td align="left"  scope="col"> <input type="text" id="in_referencia" placeholder="" style="margin-left:15px;width:300px;" />
											  </td>

											  <tr align="right">
												<td  width="150" scope="col"><label>Descrição :</label></td>
											  </td>
									  			
											  <tr align="right">
												<td  width="150" scope="col"></td>
												<td align="left"  scope="col"><textarea style="margin-left:15px;"id="in_decricao" placeholder="Coloque aqui as qualidades do lugar anunciado ." maxlength="550" ></textarea>
											  </td>
									  			
									  		
										</table>									
																		
										<label style="font-size:20px" >Coloque a quantidade Correspondente a cada Item</label>
										<hr><br>

										<table align="center" width="700" border="0" >

											  <tr align="right" >
												<td  width="150" scope="col"><label>Quartos :</label></td>
												<td align="left" width="160" scope="col"> <input type="text" id="qtd_quartos" placeholder="" style="margin-left:15px;width:140px;"  maxlength="2" />
											  </td>
											  
											  <tr align="right">
												<td  width="150" scope="col"><label>Banheiros :</label></td>
												<td align="left" width="160" scope="col"> <input type="text" id="qtd_banheiros" placeholder="" style="margin-left:15px;width:140px;"  maxlength="2" />
											  </td>

					
											  <tr align="right">
												<td  width="150" scope="col"><label>Vagas na garagem :</label></td>
												<td align="left" width="160" scope="col" title="Coloque zero caso não tenha garagem"> <input type="text" id="qtd_vagas" placeholder="" style="margin-left:15px;width:140px;"  maxlength="2" />
											  </td>

											   <tr align="right">
												<td  width="150" scope="col"><label>Acomoda :</label></td>
												<td align="left" width="250" scope="col" title="Coloque zero caso não tenha garagem"> <input type="text" id="qtd_acomoda" placeholder="" style="margin-left:15px;width:140px;"  maxlength="2" />(pessoas)
											 
											 											   <tr align="right">
												<td  width="150" scope="col"><label>Valor do Aluguel :</label></td>
												<td align="left" width="250" scope="col" title=""> <input type="text" id="in_aluguel" placeholder="" style="margin-left:15px;width:140px;"  />
											  </td>
											  <tr align="right">
												<td  width="150" scope="col"><label>Outras Informações :</label></td>
											  </td>
									  			
											  <tr align="right">
												<td  width="150" scope="col"></td>
												<td align="left"  scope="col"><textarea style="margin-left:15px;"id="in_info" placeholder="Coloque aqui algum item não citado acima ." maxlength="550" ></textarea>
											  </td>
											
										</table>



										<label style="font-size:20px">Contato</label>
										<hr>

										<table align="center" width="700" border="0">

											  <tr align="right">
												<td  width="150" scope="col"><label>Email 1:</label></td>
												<td align="left" width="450" scope="col"> <input type="text" id="in_email1" placeholder="" style="margin-left:15px;" />
											  </td>
											  <tr align="right">
												<td  width="150" scope="col"><label>Email 2 :</label></td>
												<td align="left" width="450" scope="col"> <input type="text" id="in_email2" placeholder="Opcional" style="margin-left:15px;"  />
											  </td>

											  <tr align="right">
												<td  width="150" scope="col"><label>Telefone 1:</label></td>
												<td align="left" width="" scope="col"> <input type="text" id="in_tel1" placeholder="" style="margin-left:15px;width:140px;" maxlength="15" />
											  </td>

									   		  <tr align="right">
												<td  width="150" scope="col"><label>Telefone 2 :</label></td>
												<td align="left"  scope="col"> <input type="text" id="in_tel2" placeholder="Opcional" style="margin-left:15px;width:140px;" maxlength="15"/>
											  </td>

											  <tr align="right">
												<td  width="150" scope="col"><label>Falar Com :</label></td>
												<td align="left"  scope="col"> <input type="text" id="in_falar_com" style="margin-left:15px;width:240px;" maxlength="40"/>
											  </td>
									  		
										</table>			

										<label style="font-size:20px">Imagens</label>
										<hr>
									

									<div align="center"id="img_escolha">


									<div id="visualizar" style="display:none;width:300px;height:200px;">
									</div>
									<form id="formulario" method="post" enctype="multipart/form-data" action="upload.php">
										<table align="center" width="700" border="0">
											  
											  <tr align="right">
												<td  width="150" scope="col"><label> Principal :</label></td>
												<td align="left" width="600" scope="col"><input type="file"  name="imagem" id="imagem" style="margin-left:15px;width:390px;background:#FFFFFF;font-size:1.2em;" />
									          <input style="width:120px" type="button" id="bt_remover_01" value="Remover" class="button"/>

												<br />
											  </td>
										</table>
										<input type="hidden" id="img_principal" name="img_principal" value=""/>
									</form>									
									

									<div id="visualizar2" style="display:none;width:300px;height:200px;">
									</div>
									<form id="formulario2" method="post" enctype="multipart/form-data" action="upload2.php">
										<table align="center" width="700" border="0">
											  
											  <tr align="right">
												<td  width="150" scope="col"><label> Complementar 1 :</label></td>
												<td align="left" width="600" scope="col"><input type="file"  name="complementar1" id="complementar1" style="margin-left:15px;width:390px;background:#FFFFFF;font-size:1.2em;" />
							   		            <input style="width:120px" type="button" id="bt_remover_02" value="Remover" class="button"/>

												<br />
											  </td>
										</table>
										<input type="hidden" id="img_2" name="img_2" value=""/>

									</form>									
									
										<div id="visualizar3" style="display:none;width:300px;height:200px;">
									</div>
									<form id="formulario3" method="post" enctype="multipart/form-data" action="upload3.php">
										<table align="center" width="700" border="0">
											  
											  <tr align="right">
												<td  width="150" scope="col"><label> Complementar 2:</label></td>
												<td align="left" width="600" scope="col"><input type="file"  name="complementar2" id="complementar2" style="margin-left:15px;width:390px;background:#FFFFFF;font-size:1.2em;" />
			                       	            <input style="width:120px" type="button" id="bt_remover_03" value="Remover" class="button"/>

												<br />
											  </td>
										</table>
										<input type="hidden" id="img_3" name="img_3" value=""/>
									</form>									
									

								</div><!-- Fecha escolha de Imagens-->
					
					<!-- esse input hidden esta sendo usado para armazernar o email do usuario que esta fazendo a publicação -->					
					<input type="hidden" id="email" name="email" value="<?php echo "$email" ?>"/>
	


									         <div align="center"><br><br><h3>Atenção</h3>
									          <p>Ao fazer este anuncio eu concordo inteiramente com<br> os <a href="" title="Termos de Uso da CamposTudo">Termos de Uso</a> da CamposTudo. </p>
									          <p class="links" style="margin:0px 0px 0px 0px;width:200px;height:30px;"><a href="#" id="bt_publicar_moradia" class="button">Publicar Anuncio</a></p>
									         <div>
										
										</article>


























										<!-- Outros publicidade e etc ....-->


								
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