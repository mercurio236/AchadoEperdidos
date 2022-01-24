<h1 style="text-align:center;">Pesquisa Objetos Perdidos</h1>

<form action="index.php?page=pesquisa-blog" name="pesquisar1" method="post" style="margin-top:10px;">
	<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity" style="margin-top:1%;">Pesquise o que voce procura</label>
      <input type="text" class="form-control" name="pesquisar1" placeholder="Pesquisa">
    </div>
    </div>
</form>
<?php

$pesquisar1 = @$_REQUEST['pesquisar1'];
$resultado_blog = "select * from blog where msg like '%$pesquisar1%' limit 5";
$pesquisa_nome = mysqli_query($conn,$resultado_blog);


	$sql = "SELECT * FROM `blog` ORDER BY `id_blog` DESC";
	$result = $conn->query($resultado_blog);
	$qtd = $result->num_rows;
	

while($rows_pesquisa = mysqli_fetch_array($pesquisa_nome)){
	if($qtd > 0){
		print "<p>Itens cadastrados <b>$qtd</b> resultado(s)</p>";
			while( $row = $result->fetch_assoc()){
				print "<div class='card'>";
					print "<div class='card-header'>";
						print $row["nome"]." está procurando ";
			print "</div>";
				
				print "<div class='card-body'>";
					print "<blockquote class='blockquote mb-0'>";
				print "<strong>Nome do objeto: </strong>".$row["nome"]."<br>";
				print "<strong>E-mail: </strong>".$row["email"]."<br>";
				print "<strong>Telefone: </strong>".$row["tel"]."<br>";
				print "<strong>Data que foi encontrado: </strong>".$row["msg"];
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
		
}


?>