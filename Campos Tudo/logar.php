<?php

	include "conexao.php";
	
	extract($_POST);
	
	$sql  = mysql_query("SELECT * FROM usuarios WHERE email = '$email'");
	
	$cont = mysql_num_rows($sql);
	
	while($leitor = mysql_fetch_array($sql))
	{
		$senha_tb   = $leitor['senha']; 
		$sobrenome  = $leitor['sobrenome'];
		$nome       = $leitor['nome'];
		$email      = $leitor['email'];
		$id_usuario = $leitor['id'];
		$empresa    = $leitor['empresa'];
		$data_      = $leitor['data'];
		$foto       = $leitor['foto'];
		$status     = $leitor['status'];
	}
	if($cont == 0)
	{
		session_start();
		
		if(isset($_SESSION["login_usuario"]) AND isset($_SESSION['senha_usuario'])) 
		{
			unset($_SESSION['login_usuario']);
			unset($_SESSION['senha_usuario']);
		}
		echo "0";
	}
	else
	{
		if($senha != $senha_tb)
		{
			session_start();
			if(isset($_SESSION["login_usuario"]) AND isset($_SESSION['senha_usuario'])) 
			{
				unset($_SESSION['login_usuario']);
				unset($_SESSION['senha_usuario']);
			}
			echo "0";
			
		}
		else
		{

			if($status == "desativado")
			{
				session_start();
				if(isset($_SESSION["login_usuario"]) AND isset($_SESSION['senha_usuario'])) 
				{
					unset($_SESSION['login_usuario']);
					unset($_SESSION['senha_usuario']);
				}
				echo $email;
			}
			else
			{
				session_start();
				$_SESSION['nome_user']  = $nome;
				$_SESSION['id_user']    = $id_usuario;
				$_SESSION['email_user'] = $email;
				$_SESSION['sobrenome']  = $sobrenome;
				$_SESSION['empresa']    = $empresa;
				$_SESSION['foto']       = $foto;
				$_SESSION['data']       = $data_;
				echo "1";
			}
		}
	}
	
?>
