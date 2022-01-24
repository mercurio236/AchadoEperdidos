<!--Cadastro no banco-->
<?php
$nome_usuario = $_REQUEST["nome"];
$email_usu = $_REQUEST["email"];
$telefone = $_REQUEST["tel"];
$men = $_REQUEST["msg"];

$sql = "insert into blog (nome, email, tel, msg) values ('{$nome_usuario}','{$email_usu}','{$telefone}','{$men}')";

$result = $conn->query($sql);

	if ($result == true){
		print "<div class='alert alert-success'>Cadastrado com sucesso</div>";
		echo "<meta http-equiv='refresh' content='1;index.php?page=blog'>";
	}
	else{
		print "<div class='alert alert-danger'>Não cadastrado</div>";
	}
?>