<?php
include("img.php");
?>

<!-- Campos para cadastro de objetos no site-->



<form action="index.php?page=info" method="post" style="margin-top:7%;">
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Objeto encontrado</label>
      <input type="text" class="form-control" name="nome_obj" placeholder="Objeto encontrado" required>
    </div>
  </div>
  
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Data que foi encontrado</label>
      <input type="date" class="form-control" name="data_obj" placeholder="Data" required>
    </div>
  </div>
  
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">RGM</label>
      <input type="number" class="form-control" name="rgm_obj" placeholder="RGM" required>
    </div>
  </div>
  
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Seu Nome</label>
      <input type="text" class="form-control" name="nome_usu" placeholder="Seu Nome" required>
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">E-mail para contato:</label>
      <input type="email" class="form-control" name="email" placeholder="E-mail" required>
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Telefone para contato:</label>
      <input type="number" class="form-control" name="tel" placeholder="(xx) 9xxxx-xxxx" required>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Publicar</button>
</form>
<br><br>



  