<?php

	include "../conexao.php";

	$user = $_GET['user'];

	$date = date("Y/m/d");


	$sql_consulta = mysql_query("SELECT * FROM usuarios WHERE email = '$user'");
	$cont = mysql_num_rows($sql_consulta);

	if($cont > 0)
	{
		$sql = mysql_query("UPDATE usuarios SET data = '$date', status = 'ativado'");
		
		while($leitor = mysql_fetch_array($sql_consulta))
		{
			$nome = $leitor['nome'];
		}


		session_start();
		
		$_SESSION['nome_user']  = $nome;
		$_SESSION['email_user'] = $user;

		header('Location:../index.php');
	}
	else
		echo $sql;
	
?>