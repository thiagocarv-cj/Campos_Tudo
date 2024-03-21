<?php
	session_start();
	
	unset($_SESSION['nome_user']);
	unset($_SESSION['email_user']);
	
	header('Location:index.php');
?>