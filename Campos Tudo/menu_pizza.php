<script type="text/javascript">
$(function(){
	
	$('#li_promocoes').click(function(){

		$('li').removeClass('current_page_item');
		$('#li_promocoes').addClass('current_page_item');
		$('#carregando').show();
		$('#produtos').html('');
		$.post('div_pizzas.php',{}
		,function(retorno)
		{
			$('#produtos').html(retorno);
			$('#carregando').hide();
			
		});

	});
	$('#li_epecialidade').click(function(){
		$('li').removeClass('current_page_item');
		$('#li_epecialidade').addClass('current_page_item');
		
	});
	$('#li_refri').click(function(){

		$('li').removeClass('current_page_item');
		$('#li_refri').addClass('current_page_item');
		$('#carregando').show();
		$('#produtos').html('');

		$.post('refri.php',{}
		,function(retorno)
		{
			$('#produtos').html(retorno);
			$('#carregando').hide();
		});
	});
	$('#li_acomp').click(function(){

		$('li').removeClass('current_page_item');
		$('#li_acomp').addClass('current_page_item');
	});
	$('#li_top_10').click(function(){

		$('li').removeClass('current_page_item');
		$('#li_top_10').addClass('current_page_item');
	});
});

</script>

<!-- Nav Wrapper -->
			<div id="nav-wrapper">
				<nav id="nav" class="5grid-layout">
					<div class="row">
						<div class="12u">
							<ul id="nav-top" class="mobileUI-site-nav">
								<li id="li_promocoes" class="current_page_item"><a href="#">Pizzas Salgadas</a></li>
								<li id="li_top_10"><a href="#" onclick="">Pizzas Doces</a></li>
								<li id="li_epecialidade"><a href="#" onclick="">ESPECIALIDADES DA CASA</a></li>
								<li id="li_refri"><a href="#">Refrigerantes</a></li>
								<li id="li_acomp"><a href="#" onclick="">ACOMPANHAMENTOS</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>