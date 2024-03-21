<?php

	include "conexao.php";

	extract($_POST);



	$sql_consulta = mysql_query("SELECT * FROM usuarios WHERE email = '$email'");
	$cont = mysql_num_rows($sql_consulta);

	if($cont == 0)
		echo "false";
	else
	{
		while($leitor = mysql_fetch_array($sql_consulta))
		{
			$nome  = $leitor['nome'];
			$senha = $leitor['senha'];
		}	
	
			$msg .= "Oi $nome ,  ";
			$msg .= "Sua senha é %$%@&&@&#[$senha]%$%@&&@&#!

			http://www.campostudo.com.br/entrar.php

			Obrigado por fazer parte da CamposTudo !
			";

			mail("$email","Recuperação de Senha","$msg","CamposTudo");

		echo "true";
	}
	
?>