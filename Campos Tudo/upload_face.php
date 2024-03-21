<?php
	
	include "conexao.php";

	$pasta = "fotos/";

	$id_usuario = $_POST['id_usuario'];



	$permitidos = array(".jpg",".jpeg",".gif",".png", ".bmp");
	
	if(isset($_POST)){
		$nome_imagem    = $_FILES['imagem_face']['name']; 
		$tamanho_imagem = $_FILES['imagem_face']['size'];
		
		/* pega a extensão do arquivo */
		$ext = strtolower(strrchr($nome_imagem,"."));
		
		/*  verifica se a extensão está entre as extensões permitidas */
		if(in_array($ext,$permitidos)){
			
			/* converte o tamanho para KB */
			$tamanho = round($tamanho_imagem / 3072);
			
			if($tamanho < 3072){ //se imagem for até 1MB envia
				
				if($_POST['img_face'] == 'anonimo.jpg')
				{
					$nome_atual = md5(uniqid(time())).$ext; //nome que dará a imagem
					$muda_foto = mysql_query("UPDATE usuarios SET foto = '$nome_atual' where id = '$id_usuario'");
					
					session_start();
					$_SESSION['foto']       = $nome_atual;

				}
				else
				{
					$nome_atual = $_POST['img_face'];
					unlink("fotos/$nome_atual");
				}


				$tmp = $_FILES['imagem_face']['tmp_name']; //caminho temporário da imagem
				
				/* se enviar a foto, insere o nome da foto no banco de dados */
				if(move_uploaded_file($tmp,$pasta.$nome_atual)){
					echo "<img src='fotos/".$nome_atual."'>"; //imprime a foto na tela
					echo "<script>$('#img_face').val('$nome_atual');$('#formulario_face').slideUp();$('#muda_').val('1');</script>";

				}else{
					echo "Falha ao enviar";
				}
			}else{
				echo "A imagem deve ser de no máximo 1MB";
			}
		}else{
			echo "Somente são aceitos arquivos do tipo Imagem";
		}
	}else{
		echo "Selecione uma imagem";
		exit;
	}
?>