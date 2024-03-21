<?php
	
	include "conexao.php";

	extract($_POST);


	$date = date("Y/m/d");


	$sql_consulta = mysql_query("SELECT * FROM usuarios WHERE email = '$email'");
	$cont = mysql_num_rows($sql_consulta);

	if($cont == 0)
	{
		$sql = mysql_query("INSERT INTO usuarios (nome,sobrenome,empresa,email,senha,data,status) VALUES('$nome','$sobrenome','$empresa','$email','$senha','$date','desativado')");
		
			$for = $email;
	
			$msg .= "Oi $nome ,  ";
			$msg .= "para confirmar seu cadastro basta clicar no link  !

			http://www.campostudo.com.br/conf/conf.php?user=$email

			Obrigado por fazer parte da CamposTudo !
			";
			
			mail("$for","Confirmação ","$msg","CamposTudo");		
			mail("diego_germano28@yahoo.com.br","Novo cadastro","$email");


		echo "true";
	}
	else
		echo "false";
	
?>