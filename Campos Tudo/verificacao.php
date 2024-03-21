<?php
	

	if(isset($_SESSION["nome_user"]) AND isset($_SESSION['email_user'])) 
	{

		$nome       = $_SESSION['nome_user'];
		$email      = $_SESSION['email_user'];
		
		echo "<span title=\"$email\" style=\"color:#FFFFFF;font-size:18px;text-transform: capitalize;\">Olá $nome</span><a style=\"text-decoration:none;color:#FFFFFF;margin-left:10px;\" href=\"logout.php\" >[ sair ]</a>";
	}	
	else
	{
		echo "<a style=\"font-size:15px;text-decoration:none;color:#FFFFFF;\" href=\"entrar.php\" >[ Entrar ]</a><a style=\"font-size:15px;text-decoration:none;color:#FFFFFF;margin-left:10px;\" href=\"cadastrar.php\" >[ Cadastrar-se ]</a>";
	}
	
	
 
?>