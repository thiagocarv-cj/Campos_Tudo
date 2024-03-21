<?php
	include "conexao.php"; 
	$nome = $_POST['nome'];
	$rua = $_POST['rua'];
	$bairro = $_POST['bairro'];
	$numero = $_POST['numero'];
	$complemento = $_POST['complemento'];
	
	$selectpizza = mysql_query("SELECT * FROM pizzatemp ");
	while ($linha = mysql_fetch_array($selectpizza)) {
		$arrayrecheio = array($linha['molho'],$linha['mussarela'],$linha['tomate'],$linha['presunto'],$linha['parmesao'],$linha['ovos'],$linha['cebola'],$linha['alho crocante'],$linha['atum'] );	


	}
	foreach ($arrayrecheio as $list) {
 		if($list != ""){
 			$mesg .= $list;
 		}
 	}

 	$for = "contato@campostudo.com.br";
 	mail("$for","$assunto","$mesg","");
?>