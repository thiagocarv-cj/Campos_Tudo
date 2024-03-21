<?php

	include "conexao.php";

	extract($_POST);


	$date = date("Y/m/d");
	$hora = date("H:i");
	

	$texto=explode("/",$dt_limite);
	$dt_limite = $texto[2]."/".$texto[1]."/".$texto[0];
	


	$sql = mysql_query("
	INSERT INTO  emprega (
	`cargo` ,
	`qtd_vagas` ,
	`cidade_atuacao` ,
	`estado` ,
	`empresa` ,
	`requisitos` ,
	`atribuicao` ,
	`salario` ,
	`beneficios` ,
	`outras_info` ,
	`dt_inicio` ,
	`hora` ,
	`dt_fim` ,
	`remetente` ,
	`tipo_envio` ,
	`email`,
	`assunto`
	)VALUES (
	'$cargo',
	'$qtd',
	'$city',
	'$estado',
	'$empresa',
	'$know',
	'$atribuicoes',
	'$salario',
	'$beneficios',
	'$info',
	'$date',
	'$hora',
	'$dt_limite',
	'$aos_cuidados',
	'$encaminhamento',
	'$email',
	'$assunto');");
	?>