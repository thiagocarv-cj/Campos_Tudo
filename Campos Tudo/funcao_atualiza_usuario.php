<?php

	include "conexao.php";

	extract($_POST);
	
	$for = $email;

	$msg .= "Oi $nome ,  ";
	$msg .= "para confirmar seu cadastro basta clicar no link  !

	http://www.campostudo.com.br/conf/conf.php?user=$email

	Obrigado por fazer parte da CamposTudo !
	";
	
	mail("$for","Confirmação ","$msg","CamposTudo");		
	mail("diego_germano28@yahoo.com.br","Novo cadastro","$email");
	mail("felipe_cherubin@hotmail.com","Novo cadastro","$email");
	mail("thiagocarv2705@gmail.com","Novo cadastro","$email");
	
?>