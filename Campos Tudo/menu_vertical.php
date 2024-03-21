<script>
	function alerta()
	{
		alertify.set({ labels: { ok: "Tudo Bem !", cancel: "Deny" } });
		alertify.alert("Módulo em construção em breve ! <br/> CamposTudo.");
	}
</script>
<!-- Nav Wrapper -->
			<div id="nav-wrapper">
				<nav id="nav" class="5grid-layout">
					<div class="row">
						<div class="12u">
							<ul id="nav-top" class="mobileUI-site-nav">
								<li class="current_page_item"><a href="index.php">Home</a></li>
								<li>
									<a href="" class="arrow">Categorias</a>
									<ul>
										<li><a href="vagas.php">Campos Emprega</a></li>
										<li><a href="#" onclick="alerta()" >Campos Compra e venda</a></li>
										<li><a href="#" onclick="alerta()" >Campos Alugue</a></li>
										<li>
											<span class="arrow">Outras</span>
											<ul>
												<li><a href="#" onclick="alerta()">Pizzarias</a></li>
												<li><a href="#" onclick="alerta()">Restaurantes</a></li>
												<li><a href="#" onclick="alerta()">Hoteis</a></li>
												<li><a href="#" onclick="alerta()">Pousadas</a></li>
												<li><a href="#" onclick="alerta()">Pontos Turisticos</a></li>
											</ul>
										</li>
										<li><a href="#"></a></li>
									</ul>
								</li>
								<li id="li_tel_publicoa"><a href="telefones_uteis.php" title="Telefones de Órgãos Públicos ." onclick="">Telefones Uteis</a></li>
								<li id="li_servicos"><a href="#" onclick="alerta()">Serviços</a></li>
								<li id="li_fale"><a href="fale_conosco.php">Fale Conosco</a></li>
								<li id="li_quemsomos"><a href="#" onclick="alerta()">Quem Somos</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>