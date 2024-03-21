

<!--<script class="jsbin" src="eventos/eventos_pizza.js"> </script>-->

<?php 
include "conexao.php";
$nomes = $_POST['nome'];
$preco = $_POST['preco'];
$cod = $_POST['cod'];
$codigo = $_POST['codigo'];
$retirar = $_POST['retirar'];

$selectmeiapizza = mysql_query("SELECT * FROM meiapizzatemp ");
		$cont=0;
		while ($linha = mysql_fetch_array($selectmeiapizza)) {
			$cont++;
		}
		$result = $cont % 2;
		if($result == 0){

if($retirar == ""){
  			$pizzas = mysql_query("SELECT * FROM pizza WHERE codigo = '$cod' ");
 			while ($linha = mysql_fetch_array($pizzas)){

 				$codi = $linha['codigo'];
				$nomess = $linha['nome'];

				$arrayrecheio = array($linha['molho'],$linha['mussarela'],$linha['tomate'],$linha['presunto'],$linha['parmesao'],$linha['ovos'],$linha['cebola'],$linha['alho crocante'],$linha['atum'] );	

			}
		$select = mysql_query("SELECT codigo FROM pizzatemp WHERE codigo = '$cod' ");
 		$cont = mysql_fetch_row($select);
 		if($cont != 0){
 			?>
 			<script>
 				$(document).ready(function(){
 					adicionapizza('<?php echo $cod ?>');
 				});
 			</script>
 			<?php
 		}else{
		$Insertpizzatemp = mysql_query("INSERT INTO pizzatemp (codigo, nome ) value ('".$codi."','".$nomess."')");
	?>
	<h3  style="font-size:18px;" id="divpizza<?php echo $codi?>" name="divpizza<?php echo $codi?>">
 	<?php
 		$selectpizzatemp = mysql_query("SELECT * FROM pizzatemp WHERE verificacao != 'true' ");

 		while ($linhas = mysql_fetch_array($selectpizzatemp))
 		{
 			$codi = $linhas['codigo'];
			$nomess = $linhas['nome'];

			
			$somas = number_format($preco, 2,'.','');
 			$somass = str_replace(".",",", $somas);	
 	?>
 		----------------------------------------------------------
 		<center>
 			<?php echo $nomess." \ R$ ".$somass ?>
  		</center>
 			<center>
 			<span style="font-size: 15px">Recheio</span><br />
	<?php
 					foreach ($arrayrecheio as $list) {
 						if($list != ""){
 						?><span style="font-size: 13px"><input id="" onclick="check('<?php echo $codi ?>','<?php echo $list ?>')" checked type="checkbox"><?php echo $list;
 						}
 					}
 					?></span>
 					<br />
 					</center>
 					<?php
 				}
 				$updatepizzatemp = mysql_query("UPDATE pizzatemp SET verificacao = 'true' WHERE codigo = '$codi' ");
 				?>
 				<div style="text-align: right;">
 					<a href="#" onClick="retirar('<?php echo $codi ?>')" style="font-size: 10px" class="button">Retirar</a>
					
	 					<input style="float: left; width: 40px; height: 38px; font: bold 20px Helvetica, sans-serif; padding: 3px 0 0 0;text-align: center;" type="text" name="bu<?php echo $codi ?>" id="bu<?php echo $codi ?>" value="1">
 						<div style="float: left; margin-top: 7px"> <div style="float: left;" class="inc buttonn" onClick="Button1('<?php echo $codi?>')">+</div><div style="float: left;" class="dec buttonn" onClick="Button2('<?php echo $codi?>')">-</div> </div>
 					
				</div>
 	<span style="font-size: 18px">----------------------------------------------------------</span>
 </h3>
 <?php
}
}
if($retirar != ""){
 				$deletepizzatemp = mysql_query("DELETE FROM pizzatemp WHERE codigo = '$codigo' ");
 				}
 ?>
 <?php
}else{
	?>
	<center><span id="aviso" name="aviso" style="color: rgb(237,46,55)" >Escolha a outra metade da Pizza</span></center>
	<?php
}
 ?>



