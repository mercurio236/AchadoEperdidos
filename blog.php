<h1 style="text-align:center;">Blog de Ajuda</h1>

<!-- Começo do blog do objeto--->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" style="margin-top:2%;">Postar o que perdeu</button>

<!--Modal para preencher os dados-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Preencha os campos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="index.php?page=nao-encontrado" method="post">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nome:</label>
            <input type="text" class="form-control" name="nome" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">E-mail:</label>
            <input type="email" class="form-control" name="email" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Telefone:</label>
            <input type="number" class="form-control" name="tel" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label"><strong>O que você perdeu, descreva:</strong></label>
            <textarea class="form-control" name="msg" maxlength="700" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!--Fim Modal-->

<body>
<form action="index.php?page=pesquisa-blog" name="pesquisar1" method="post" style="margin-top:10px;">
	<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity" style="margin-top:1%;">Pesquise o que voce procura</label>
      <input type="text" class="form-control" name="pesquisar1" placeholder="Pesquisa">
    </div>
    </div>
</form>

<!--Objetos perdidos-->
 <?php
	$sql = "SELECT * FROM `blog` ORDER BY `id_blog` DESC";
	$result = $conn->query($sql);
	$qtd = $result->num_rows;
	
	if($qtd > 0){
		print "<p>Itens perdidos <b>$qtd</b> resultado(s)</p>";
			while( $row = $result->fetch_assoc()){
				print "<div class='card'>";
					print "<div class='card-header'>";
						print $row["nome"]." está procurando";
			print "</div>";
				
				print "<div class='card-body'>";
					print "<blockquote class='blockquote mb-0'>";
				print "<strong>Nome: </strong>".$row["nome"]."<br>";
				print "<strong>E-mail para contato: </strong>".$row["email"]."<br>";
				print "<strong>Telefone para contato: </strong>".$row["tel"]."<br>";
				print "<strong>Descrição do item que perdeu: </strong>".$row["msg"];
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
 
<body>
