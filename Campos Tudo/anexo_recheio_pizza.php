
<?php
	include "conexao.php"; 
	$nome = $_POST['nome'];
	$codigo = $_POST['codigo'];
	$nomes = str_replace(" ","_", $nome);
	$selectpizza = mysql_query("SELECT * FROM pizzatemp WHERE codigo = '$codigo' ");
	while ($linha = mysql_fetch_array($selectpizza)) {
		$recheio = $linha[$nomes];
	}
	if($recheio == ''){
		$updatevazio = mysql_query("UPDATE pizzatemp SET $nomes = '$nomes' WHERE codigo = '$codigo' ");

	}else{
		$updatevazio = mysql_query("UPDATE pizzatemp SET $nomes = '' WHERE codigo = '$codigo' ");

	}
	
?>
