

<script class="jsbin" src="eventos/eventos_pizza.js"> </script>

<?php 
include "conexao.php";
$nomes = $_POST['nome'];
$preco = $_POST['preco'];
$cod = $_POST['cod'];
$codigo = $_POST['codigo'];
$retirar = $_POST['retirar'];
$numero = $_POST['numero'];



if($retirar == ""){
  		$pizzas = mysql_query("SELECT * FROM pizza WHERE codigo = '$cod' ");
 		while ($linha = mysql_fetch_array($pizzas)){
 			$codi = $linha['codigo'];
			$nomess = $linha['nome'];
			$arrayrecheio = array($linha['molho'],$linha['mussarela'],$linha['tomate'],$linha['presunto'],$linha['parmesao'],$linha['ovos'],$linha['cebola'],$linha['alho crocante'],$linha['atum'] );
		}
		$selectmeia = mysql_query("SELECT meiapizza FROM adicionameia ");
		$numero=0;
		while ($linha = mysql_fetch_array($selectmeia)) {
			$numero++;
		}

		
		$selectmeiapizza = mysql_query("SELECT * FROM meiapizzatemp ");
		$cont=0;
		while ($linha = mysql_fetch_array($selectmeiapizza)) {
			$cont++;
		}
		$result = $cont % 2;
		if($result == 0){
			$Insertrtpizzatemp = mysql_query("INSERT INTO meiapizzatemp (codigo, juntar, nome ) value ('".$codi."','".$numero."','".$nomess."')");
	?>

	<h3 style="font-size:18px;" id="meia<?php echo $numero?>" name="meia<?php echo $numero?>">
 	----------------------------------------------------------
 	<?php
 		$selectpizzatemp = mysql_query("SELECT * FROM meiapizzatemp WHERE verificacao != 'true' ");
 		while ($linhas = mysql_fetch_array($selectpizzatemp))
 		{
 			$codi = $linhas['codigo'];
			$nomess = $linhas['nome'];			
 	?>	
 		<?php 
 			$soma = $preco/2;
 			$somas = number_format($soma, 2,'.','');
 			$somass = str_replace(".",",", $somas);
 		?>
 		<center>
 			<?php echo $nomess." \ R$ ".$somass?>
 		</center>
  		<!--<div style="float: right" >
	 		<input style="float: left; width: 40px; font: bold 20px Helvetica, sans-serif; padding: 3px 0 0 0;text-align: center;" type="text" name="bu<?php echo $codi ?>" id="bu<?php echo $codi ?>" value="1">
 			<div style="float: left"> <div class="inc buttonn" onClick="Button1('<?php echo $codi?>')">+</div><div class="dec buttonn" onClick="Button2('<?php echo $codi?>')">-</div> </div>
 		</div>-->
 		
 			<center>
 			<span style="font-size: 15px">Recheio</span><br />
 			
	<?php
 					foreach ($arrayrecheio as $list) {
 						if($list != ""){
 						?><span style="font-size: 13px;"><input id="" onclick="checkmeia('<?php echo $codi ?>','<?php echo $list ?>','<?php echo $numero ?>')" checked type="checkbox"><?php echo $list;
 						}
 					}
 					?></span>
 					<br />
 				</center>
 					<?php
 				}
 				$updatepizzatemp = mysql_query("UPDATE meiapizzatemp SET verificacao = 'true' WHERE codigo = '$codi' AND juntar = '$numero' ");
 				?>
 				<div id="retiranumero<?php echo $numero?>" name="retiranumero<?php echo $numero?>" style="text-align: right;">
 					<a href="#" id="retiranumero<?php echo $numero?>" name="retiranumero<?php echo $numero?>" onClick="retirarmeia('<?php echo $numero; ?>','<?php echo $codi; ?>')" style="font-size: 10px" class="button">Retirar</a>
				</div>	
 			</h3>
 			
 				<?php 
 				}else{
 				?>
			<script>
 				$(document).ready(function(){
 					removebotao('<?php echo $numero ?>');
 				});
 			</script>
	<!--outra metade-->
		<h3 style="font-size:18px;" id="meia1<?php echo $numero;?>" name="meia<?php echo $numero?>">
 	<?php

 		$Insertrtpizzatemp = mysql_query("INSERT INTO meiapizzatemp (codigo, juntar, nome ) value ('".$codi."','".$numero."','".$nomess."')");

 		$selectpizzatemp = mysql_query("SELECT * FROM meiapizzatemp WHERE verificacao != 'true' ");
 		while ($linhas = mysql_fetch_array($selectpizzatemp))
 		{
 			$codi = $linhas['codigo'];
			$nomess = $linhas['nome'];			
 	?>	
 		<!--<a href="#" onClick="retirarmeia('<?php echo $codi ?>')" style="font-size: 10px" class="button">Retirar</a>-->
 		<?php 
 			$soma = $preco/2;
 			$somas = number_format($soma, 2,'.','');
 			$somass = str_replace(".",",", $somas);
 		?>
 		<center>
 			<?php echo $nomess." \ R$ ".$somass ?>
 		</center>
  		<!--<div style="float: right" >
	 		<input style="float: left; width: 40px; font: bold 20px Helvetica, sans-serif; padding: 3px 0 0 0;text-align: center;" type="text" name="bu<?php echo $codi ?>" id="bu<?php echo $codi ?>" value="1">
 			<div style="float: left"> <div class="inc buttonn" onClick="Button1('<?php echo $codi?>')">+</div><div class="dec buttonn" onClick="Button2('<?php echo $codi?>')">-</div> </div>
 		</div>-->
 			<center>
 			<span style="font-size: 15px">Recheio</span><br />
	<?php
 					foreach ($arrayrecheio as $list) {
 						if($list != ""){
 						?><span style="font-size: 13px"><input id="" onclick="checkmeia('<?php echo $codi ?>','<?php echo $list ?>','<?php echo $numero ?>')" checked type="checkbox"><?php echo $list;
 						}
 					}
 					?></span>
 					<br />
 				</center>
 					<?php
 				}
 				$updatepizzatemp = mysql_query("UPDATE meiapizzatemp SET verificacao = 'true' WHERE codigo = '$codi' AND juntar = '$numero' ");
 				?> 
 				<div style="text-align: right;">
 					<a href="#" id="retiranumero<?php echo $numero?>" name="retiranumero<?php echo $numero?>" onClick="retirarmeia('<?php echo $numero; ?>','<?php echo $codi; ?>')" style="font-size: 10px" class="button">Retirar</a>
					
	 					<input style="float: left; width: 40px; height: 38px; font: bold 20px Helvetica, sans-serif; padding: 3px 0 0 0;text-align: center;" type="text" name="bumeia<?php echo $numero ?>" id="bumeia<?php echo $numero ?>" value="1">
 						<div style="float: left; margin-top: 7px"> <div style="float: left;" class="inc buttonn" onClick="Buttonmeia1('<?php echo $numero ?>')">+</div><div style="float: left;" class="dec buttonn" onClick="Buttonmeia2('<?php echo $numero?>')">-</div> </div>
 					
				</div>
 	----------------------------------------------------------
 </h3>
 <?php
 $insertmeia = mysql_query("INSERT INTO adicionameia (meiapizza) value ('".$numero."')");
}
 ?>


 <?php
}
if($retirar != ""){
 				$deletepizzatemp = mysql_query("DELETE FROM meiapizzatemp WHERE juntar = '$numero' ");
 				}
 ?>



