<html>
	<body>
<a href="index.php?page=blog">
	<button type="button" class="btn btn-primary btn-lg" style="margin-top:2%;">Não encontrei meu item</button>
</a>
<form action="index.php?page=pesquisa" name="pesquisar" method="post">
	<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity" style="margin-top:1%;">Pesquisa de item perdido</label>
      <input type="text" class="form-control" name="pesquisar" placeholder="Pesquisar">
    </div>
</form>
<br><br>
<ul class="resultado">
</ul>

<div align="left" style="margin-left:-55%; margin-top:10%;">
</div>
	</div>
    
 <!--Objetos perdidos-->
 <?php
	$sql = "SELECT * FROM `achei` ORDER BY `achei`.`id_objeto` DESC";
	$result = $conn->query($sql);
	$qtd = $result->num_rows;
	
	
	if($qtd > 0){
		print "<p>Itens cadastrados <b>$qtd</b> resultado(s)</p>";
			while( $row = $result->fetch_assoc()){
				print "<div class='card'>";
					print "<div class='card-header'>";
						print "Objeto encontrado";
			print "</div>";
				
				print "<div class='card-body'>";
					print "<blockquote class='blockquote mb-0'>";
				print "<strong>Nome do objeto: </strong>".$row["nome_obj"]."<br>";
				print "<strong>Nome de quem encontrou: </strong>".$row["nome_usu"]."<br>";
				print "<strong>E-mail: </strong>".$row["email"]."<br>";
				print "<strong>Telefone: </strong>".$row["tel"]."<br>";
				print "<strong>Data que foi encontrado: </strong>".$row["data_obj"];
						print "</blockquote>";
							print "<div align='right'>";
							print"</div>";
					print "</div>";
				print "</div>";
				print"<br>";
				}
		}
		
	else{
		print "Não encontrou resultado";
		}
 ?>
 
</html>
