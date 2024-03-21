<?php
	
	include "conexao.php";

	extract($_POST);


	$date = date("Y/m/d");
	$hora = date("H:i");


	$sql = mysql_query("
	INSERT INTO aluga(
	`id` ,
	`chave_email` ,
	`endereco` ,
	`numero` ,
	`bairro` ,
	`tipo` ,
	`referencia` ,
	`descricao` ,
	`quartos` ,
	`banheiros` ,
	`vagas` ,
	`acomoda` ,
	`aluguel` ,
	`outras_info` ,
	`email1` ,
	`email2` ,
	`telefone1` ,
	`telefone2` ,
	`img_1` ,
	`img_2` ,
	`img_3` ,
	`data` ,
	`hora`,
	`anunciante`
	)
	VALUES (
	NULL ,  '$email',  '$endereco',  '$numero',  '$bairro',  '$tipo',  '$referencia',  '$descricao',  '$qtd_quartos',  '$qtd_banheiros',  '$qtd_vagas',  '$qtd_acomoda',  '$aluguel',  '$outras_info',  '$email1',  '$email2',  '$telefone1',  '$telefone2',  '$img_1',  '$img_2',  '$img_3',  '$date',  '$hora', '$falarcom'
);");
	
?>