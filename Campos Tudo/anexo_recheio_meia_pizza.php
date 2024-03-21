<?php
	include "conexao.php"; 
	$nome = $_POST['nome'];
	$codigo = $_POST['codigo'];
	$numero = $_POST['numero'];

	$nomes = str_replace(" ","_", $nome);
	$selectpizza = mysql_query("SELECT * FROM meiapizzatemp WHERE codigo = '$codigo' AND juntar = '$numero' ");
	while ($linha = mysql_fetch_array($selectpizza)) {
		$recheio = $linha[$nomes];
	}
	if($recheio == ''){
		$updatevazio = mysql_query("UPDATE meiapizzatemp SET $nomes = '$nomes' WHERE codigo = '$codigo' AND juntar = '$numero' ");

	}else{
		$updatevazio = mysql_query("UPDATE meiapizzatemp SET $nomes = '' WHERE codigo = '$codigo' AND juntar = '$numero' ");

	}
	
?>