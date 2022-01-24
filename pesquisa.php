<h1 style="text-align:center;">Pesquisa Objetos Perdidos</h1>
<form action="index.php?page=pesquisa" name="pesquisar" method="post">
	<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity" style="margin-top:1%;">Pesquisa de item perdido</label>
      <input type="text" class="form-control" name="pesquisar" placeholder="Pesquisar">
    </div>
    </div>
</form>

<?php

$pesquisar = @$_REQUEST['pesquisar'];
$resultado_pes = "select * from achei where nome_obj like '%$pesquisar%' limit 5";
$pesquisa_nome = mysqli_query($conn,$resultado_pes);


	$sql = "SELECT * FROM `achei` ORDER BY `achei`.`id_objeto` DESC";
	$result = $conn->query($resultado_pes);
	$qtd = $result->num_rows;
	

while($rows_pesquisa = mysqli_fetch_array($pesquisa_nome)){
	if($qtd > 0){
		print "<p>Itens cadastrados <b>$qtd</b> resultado(s)</p>";
			while( $row = $result->fetch_assoc()){
				print "<div class='card'>";
					print "<div class='card-header'>";
						print $row["nome_usu"]." encontrou um(a) ".$row["nome_obj"];
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
		
}


?>