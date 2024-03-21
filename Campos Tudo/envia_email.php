<?php
	
	extract($_POST);
	
	$for = "thiagocarv@uol.com.br";
	
	$msg .= "$nome , 

			 $mensagem .

			 $email";
	
	mail("$for","$assunto","$msg","");



	
?>