<?php
	$pasta = "fotos/";
	
	/* formatos de imagem permitidos */
	$permitidos = array(".jpg",".jpeg",".gif",".png", ".bmp");
	
	if(isset($_POST)){
		$nome_imagem    = $_FILES['complementar2']['name']; 
		$tamanho_imagem = $_FILES['complementar2']['size'];
		
		/* pega a extensão do arquivo */
		$ext = strtolower(strrchr($nome_imagem,"."));
		
		/*  verifica se a extensão está entre as extensões permitidas */
		if(in_array($ext,$permitidos)){
			
			/* converte o tamanho para KB */
			$tamanho = round($tamanho_imagem / 3072);
			
			if($tamanho < 3072){ //se imagem for até 1MB envia

				if($_POST['img_3'] == '')
					$nome_atual = md5(uniqid(time())).$ext; //nome que dará a imagem
				else
					$nome_atual = $_POST['img_3'];

				$tmp = $_FILES['complementar2']['tmp_name']; //caminho temporário da imagem
				
				/* se enviar a foto, insere o nome da foto no banco de dados */
				if(move_uploaded_file($tmp,$pasta.$nome_atual)){
					echo "<img src='fotos/".$nome_atual."' id='previsualizar'>"; //imprime a foto na tela
					echo "<script>$('#img_3').val('$nome_atual')</script>";

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