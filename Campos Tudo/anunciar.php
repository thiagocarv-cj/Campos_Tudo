<?php 	
	session_start(); 
	if(isset($_SESSION["nome_user"]) AND isset($_SESSION['email_user'])) 
	{
		$nome 	= $_SESSION["nome_user"];
		$email  = $_SESSION['email_user'];	
	}
	else
		header('Location:entrar.php?cod=without');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>


	<head>
		<title>Campos Anuncia</title>
		<meta name="description" content="Emprego em Campos do Jordão, é na Campos Tudo, veja, compartilhe e participe.">
		<meta content="Vagas de emprego em Campos do Jordão, as melhores dicas de vagas em Campos do Jordão esta na Campos Tudo, olhe, compartilhe e participe." property="og:description">


		<?php include "head.php" ?>

		    <script type="text/javascript" src="eventos/eventos_anunciar.js"></script>
		    <script type="text/javascript" src="js/jquery.price_format.js"></script>

		    <script>
		    	
				function acombinar()
				{
					$('#inputValorSalario').attr("disabled",true);
					$('#inputSalario2').attr("disabled",false);
					$('#inputSalario2').attr("checked",false);
					$('#inputSalario1').attr("disabled",true);
					$('#inputValorSalario').val('');
			
				}	
				function salario_valor()
				{
					$('#inputValorSalario').attr("disabled",false);
					$('#inputSalario2').attr("disabled",true);
					$('#inputSalario1').attr("disabled",false);
					$('#inputSalario1').attr("checked",false);

				}

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
				echo "<script style=\"text-transform: capitalize;\">alerta('$nome, anuncio de vaga publicado com sucesso, Obrigado .')</script>";
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
											<h2 style="text-transform: capitalize;">Publicar Vaga Olá, <?php  echo $nome;?>. <a href="" rel="nofollow">Meus Dados</a></h2>
										
												<div align="center">
										<table align="center" width="700" border="0">

											  <tr align="right">
												<td  width="150" scope="col"><label>Cargo/Função:</label></td>
												<td align="left" width="450" scope="col"><input type="text" id="inputCargo" class="teste" style="margin-left:15px;margin-top:30px;"  maxlength="40" />

											  </td>

											  <tr align="right">
												<td  width="150" scope="col"><label>Quantidade de vagas :</label></td>
												<td align="left" width="" scope="col"><input type="text" id="inputQuantidade" placeholder="" style="width:140px;margin-left:15px;margin-top:20px;"  maxlength="3" />
											  </td>

											  <tr align="right">
												<td  width="150" scope="col"><label>Sálario :</label></td>
												<td align="left" width="" scope="col"><input type="checkbox" onclick="acombinar();" id="inputSalario1" placeholder="" style="width:20px;margin-top:20px;margin-left:20px;"  checked="checked" /> a combinar
											  </td>
											  <tr align="right">
												<td  width="150" scope="col"><label></label></td>
												<td align="left" width="" scope="col"><input type="checkbox" onclick="salario_valor();" id="inputSalario2" placeholder="" style="width:20px;margin-top:20px;margin-left:20px;" />
											  	<input disabled="disabled" id="inputValorSalario" type="text" style="width:150px;" />
											  </td>

									   		  <tr align="right">
												<td  width="150" scope="col"><label>Cidade de atuação:</label></td>
												<td align="left"  scope="col"><input type="text" id="inputCidade"  placeholder="" class="input-large" maxlength="40" style="width:300px;margin-left:15px;margin-top:20px;" />
											  </td>

											  <tr align="right">
												<td  width="150" scope="col"><label>Estado :</label></td>
												<td align="left"  scope="col">
												<select style="height:37px;font-size:15px;margin-left:15px;margin-top:20px;" id="inputUF">
                <option  value="AC">AC</option><option value="AL">AL</option><option value="AP">AP</option><option value="AM">AM</option><option value="BA">BA</option><option value="CE">CE</option><option value="DF">DF</option><option value="ES">ES</option><option value="GO">GO</option><option value="MA">MA</option><option value="MT">MT</option><option value="MS">MS</option><option value="MG">MG</option><option value="PA">PA</option><option value="PB">PB</option><option value="PR">PR</option><option value="PE">PE</option><option value="PI">PI</option><option value="RJ">RJ</option><option value="RN">RN</option><option value="RS">RS</option><option value="RO">RO</option><option value="RR">RR</option><option value="SC">SC</option><option value="SP" selected="selected">SP</option><option value="SE">SE</option><option value="TO">TO</option>
              </select>
											  </td>

											  <tr align="right">
												<td  width="150" scope="col"><label>Empresa contratante :</label></td>
												<td align="left"  scope="col"><input type="text" id="inputEmpresa" style="margin-left:15px;margin-top:20px;"   maxlength="135" />

											  </td>

											   <tr align="right">
												<td  width="150" scope="col"><label>Conhecimentos :</label></td>
											  </td>
									  			
											  <tr align="right">
												<td  width="150" scope="col"></td>
												<td align="left"  scope="col"><textarea id="inputConhecimentos" style="margin-left:15px;"  placeholder="experiências e pré-requisitos para vaga ." maxlength="550"></textarea>
											  </td>

											  <tr align="right">
												<td  width="150" scope="col"><label>Atribuições do cargo:</label></td>
											  </td>
									  			
											  <tr align="right">
												<td  width="150" scope="col"></td>
												<td align="left"  scope="col"><textarea id="inputAtribuicoes" style="margin-left:15px;" maxlength="550"></textarea>
											  </td>
											
											  <tr align="right">
												<td  width="150" scope="col"><label>Benefícios :</label></td>
											  </td>
									  			
											  <tr align="right">
												<td  width="150" scope="col"></td>
												<td align="left"  scope="col"> <textarea id="inputBeneficios" style="margin-left:15px;"  maxlength="550"></textarea>
											  </td>



											   <tr align="right">
												<td  width="150" scope="col"><label title="Data limite para o candidato encaminhar o CV.">Data limite:</label></td>
												<td align="left"  scope="col"><input class="data"style="width:150px;margin-left:15px;" type="text" id="inputDataLimite" />

											  </td>

											  <tr align="right">
												<td  width="150" scope="col"><label title="Encaminhar currículo aos cuidados de quem?">Aos cuidados de:</label></td>
												<td align="left"  scope="col"><input style="margin-top:20px;width:250px;margin-left:15px;" type="text" id="inputAosCuidados" class="input-large" maxlength="20" />

											  </td>
										
											<tr align="right">
												<td  width="150" scope="col"><label title="Deseja que o candidato encaminhe o currículo como?">Enviar currículo :</label></td>
												<td align="left"  scope="col">
												<select id="opcao_curriculo" style="height:42px;font-size:15px;margin-left:15px;margin-top:20px;">
									              		<option value="email">e-mail</option>
									                    <option value="site">site</option>
									                    <option value="pessoalmente">pessoalmente</option>
									             </select>
									             <input style="width:320px;" type="text" id="valor_curriculo" maxlength="55"/>
											  </td>
									  		
									  		
											  <tr align="right">
												<td  width="150" scope="col"><label></label></td>
											  </td>
									  			
											  <tr align="right">
												<td  width="150" scope="col">Assunto do email :</td>
												<td align="left"  scope="col">
												<div id="assunto_email">
									           	<label title="Assunto do Email que será enviado o Curriculo "></label>
									            <input style="width:310px;margin-left:15px;" type="text" id="assunto_curriculo" maxlength="30"/>
									            </div>
            
											  </td>
										</table>

										
     


         <br><br><h3>Atenção</h3>
            <p>Ao publicar essa vaga eu concorda inteiramente com<br> os <a href="" title="Termos de Uso da CamposTudo">Termos de Uso</a> da CamposTudo. </p>
         
         <p class="links" style="margin:0px 0px 0px 0px;width:200px;height:30px;"><a href="#" id="bt_publicar" class="button">Publicar Vaga</a></p>

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