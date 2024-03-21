<?php session_start();?>
<script class="jsbin" src="eventos/eventos_pizza.js"> </script>

<div id="cod_001" style="float:right;width:266px;">
<center>
	<article style="height:275px;" class="box box-standard post-small2">
		
		<h3 style="font-size:18px;">Alho e óleo/R$ 19,50 </h3>
		<div  id="visualizar" style="float:left;width:200px;height:200px;">
			<a href="#" ><img src="images/pizza1.jpg" alt="" /></a>
		</div>

		<a style="margin:0px;padding:6px; width: 200px"href="#" class="button" id="adiciona" title="Inteira Alho e Oleo" name="adiciona" onclick="AdicionarCarrinho('cod_001','Alho e óleo','19.50')" >Adicionar Pizza Inteira</a><br />
		<a style="padding:6px; width: 200px" href="#" class="button" title="1/2 Alho e Oleo" onclick="AdicionarCarrinho_meia('cod_001','Alho e óleo','19.50')" >Adicionar 1/2 Pizza</a>
	</article>
</center>
	
</div>



<div id="cod_002" style="float:right;width:266px;">
<center>
	<article style="height:275px;" class="box box-standard post-small2">
		
		<h3 style="font-size:18px;">Portuguesa/R$ 19,50 </h3>
		<div  id="visualizar" style="float:left;width:200px;height:200px;">
			<a href="#" ><img src="images/pizza2.jpg" alt="" /></a>
		</div>

		<a style="margin:0px;padding:6px; width: 200px"href="#" class="button" title="Inteira Portuguesa" onclick="AdicionarCarrinho('cod_002','Portuguesa','19.50')">Adicionar Pizza Inteira</a>
		<a style="padding:6px; width: 200px" href="#" class="button" title="1/2 Portuguesa" onclick="AdicionarCarrinho_meia('cod_002','Portugesa','19.50')" >Adicionar 1/2 Pizza</a>
	</article>
</center>	
</div>



<div id="cod_003" style="float:right;width:266px;">
<center>		
	<article style="height:275px;" class="box box-standard post-small2">
		
		<h3 style="font-size:18px;">Atum 1/R$ 19,50 </h3>
		<div  id="visualizar" style="float:left;width:200px;height:200px;">
			<a href="#" ><img src="images/pizza3.jpg" alt="" /></a>
		</div>

		<a style="float:right;margin:0px;padding:6px; width: 200px"href="#" class="button" title="Inteira Atum 1" onclick="AdicionarCarrinho('cod_003','Atum 1','19.50')">Adicionar Pizza Inteira</a>
		<a style="padding:6px; width: 200px" href="#" class="button" title="1/2 Atum 1" onclick="AdicionarCarrinho_meia('cod_003','Atum 1','19.50')" >Adiciona 1/2 Pizza</a>
	
	</article>
</center>	
</div>




<div id="cod_004" style="float:right;width:266px;">
<center>		
	<article style="height:275px;" class="box box-standard post-small2">
		
		<h3 style="font-size:18px;">2 Queijo / R$ 19,50</h3>
		<div  id="visualizar" style="float:left;width:200px;height:200px;">
			<a href="#" ><img src="images/pizza4.jpg" alt="" /></a>
		</div>


		<a style="float:right;margin:0px;padding:6px; width: 200px" title="Inteira 2 Queijos" href="#" class="button" onclick="AdicionarCarrinho('cod_004','2 Queijo','19.50')">Adicionar Pizza Inteira</a>
		<a style="padding:6px; width: 200px" href="#" class="button" title="1/2 2 Quiejos" onclick="AdicionarCarrinho_meia('cod_004','2 Quiejos','19.50')" >Adiciona 1/2 Pizza</a>
		

	</article>
</center>
</div>
	

<div id="cod_005" style="float:right;width:266px;">
<center>
	<article style="height:275px;" class="box box-standard post-small2">
		
		<h3 style="font-size:18px;">Caipira / R$ 21,50</h3>
		<div  id="visualizar" style="float:left;width:200px;height:200px;">
			<a href="#" ><img src="images/pizza6.jpg" alt="" /></a>
		</div>

		
		<a style="float:right;margin:0px;padding:6px; width: 200px" title="Inteira Caipira" href="#" class="button" onclick="AdicionarCarrinho('cod_005','Caipira','21.50')">Adicionar Pizza Inteira</a>
		<a style="padding:6px; width: 200px" href="#" class="button" title="1/2 Caipira" onclick="AdicionarCarrinho_meia('cod_005','Caipira','21.50')" >Adiciona 1/2 Pizza</a>
		
	</article>
</center>	
</div>
	


<div id="cod_006" style="float:right;width:266px;">
<center>			
	<article style="height:275px;" class="box box-standard post-small2">
		
		<h3 style="font-size:18px;">Lombo / R$ 19,50</h3>
		<div  id="visualizar" style="float:left;width:200px;height:200px;">
			<a href="#" ><img src="images/pizza5.jpg" alt="" /></a>
		</div>

		
		<a style="float:right;margin:0px;padding:6px; width: 200px" title="Inteira Lombo" href="#" class="button" onclick="AdicionarCarrinho('cod_006','Lombo','19.50')">Adicionar Pizza Inteira</a>
		<a style="padding:6px; width: 200px" href="#" class="button" title="1/2 Lombo" onclick="AdicionarCarrinho_meia('cod_006','Lombo','19.50')" >Adiciona 1/2 Pizza</a>

	</article>
</center>	
</div>

	
<div id="cod_007" style="float:right;width:266px;">
<center>			
	<article style="height:275px;" class="box box-standard post-small2">
		
		<h3 style="font-size:18px;">Brigadeiro / R$ 17,50</h3>
		<div  id="visualizar" style="float:left;width:200px;height:200px;">
			<a href="#" ><img src="images/pizza7.jpg" alt="" /></a>
		</div>

		
		<a style="float:right;margin:0px;padding:6px; width: 200px"href="#" title="Inteira Brigadeiro" class="button" onclick="AdicionarCarrinho('cod_007','Brigadeiro','17.50')">Adicionar Pizza Inteira</a>
		<a style="padding:6px; width: 200px" href="#" class="button" title="1/2 Brigadeiro" onclick="AdicionarCarrinho_meia('cod_007','Brigadeiro','17.50')" >Adiciona 1/2 Pizza</a>

	</article>
</center>	
</div>
	



<div id="cod_008" style="float:right;width:266px;">
<center>			
	<article style="height:275px;" class="box box-standard post-small2">
		
		<h3 style="font-size:18px;">Sonho Meu / R$ 21,50</h3>
		<div  id="visualizar" style="float:left;width:200px;height:200px;">
			<a href="#" ><img src="images/pizza8.jpg" alt="" /></a>
		</div>

		
		<a style="float:right;margin:0px;padding:6px; width: 200px" title="Inteira Sonho Meu" href="#" class="button" onclick="AdicionarCarrinho('cod_008','Sonho Meu','21.50')">Adicionar Pizza Inteira</a>
		<a style="padding:6px; width: 200px" href="#" class="button" title="1/2 Brigadeiro" onclick="AdicionarCarrinho_meia('cod_008','Sonho Meu','21.50')" >Adiciona 1/2 Pizza</a>
	
	</article>
</center>
</div>
	

<div id="cod_009" style="float:right;width:266px;">
<center>	
	<article style="height:275px;" class="box box-standard post-small2">
		
		<h3 style="font-size:18px;">Secret / R$ 33,00</h3>
		<div  id="visualizar" style="float:left;width:200px;height:200px;">
			<a href="#" ><img src="images/pizza9.jpg" alt="" /></a>
		</div>

		
		<a style="float:right;margin:0px;padding:6px; width: 200px" title="Inteira Secret" href="#" class="button" onclick="AdicionarCarrinho('cod_009','Secret','33.00')">Adicionar Pizza Inteira</a>
		<a style="padding:6px; width: 200px" href="#" class="button" title="1/2 Secret" onclick="AdicionarCarrinho_meia('cod_009','Secret','33.00')" >Adiciona 1/2 Pizza</a>
	
	</article>
</center>
</div>
