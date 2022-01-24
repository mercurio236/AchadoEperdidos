<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$base = "perdido";
	
	$conn = new mysqli($host, $user, $pass, $base);
	
	if($conn->connect_error){
		die("Erro: ".$conn->connect_error);
	}
	
?>