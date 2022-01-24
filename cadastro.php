<?php
	$achado  = $_REQUEST["nome_obj"];
	$data    = $_REQUEST["data_obj"];
	$rgm     = $_REQUEST["rgm_obj"];
	$nome    = $_REQUEST["nome_usu"];
	$imagem  = $_FILES["arquivo_foto"];
	$email	 = $_REQUEST["email"];
	$telefone = $_REQUEST["tel"];
	
			$sql ="insert into achei (nome_obj, data_obj, rgm_obj, nome_usu, arquivo_foto, email, tel) values ('{$achado}','{$data}', '{$rgm}', '{$nome}', '{$imagem}', '{$email}','{$telefone}')";

			
		
    $result = $conn->query($sql);
			
			if($result==true){
				print "<div class='alert alert-success'>Cadastrou com sucesso!</div>";
				echo "<meta http-equiv='refresh' content='1;index.php?page=perdidos'>";
			}
			
			else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar</div>"; 
			}
			
		
			
	/*Salvar imagem no banco*/
	
	if ($imagem != null){
		$nomeFinal = time().'.jpg';
		if(move_uploaded_file($imagem['tmp_name'], $nomeFinal)){
			$tamanhoImg = filesize($nomeFinal);
			$mysqlImg = addslashes(fread(fopen($nomeFinal,"r"), $tamanhoImg));
			
			mysql_connect($host,$username,$pass) or die("impossivel conectar");
			
			@mysql_select_db($base) or die ("Impossivel conectar");
			
			mysql_query("insert into achei (arquivo_foto) values ('{$imagem}')") or die("O sistema não foi capaz de executar o query");
			
			unlink($nomeFinal);
			
			header("location:index.php?page=info");
		}
	}

?>