<!--
//Desenvolvido por Arley Souto e Tatiane Pereira
//Data:10/06/2018
-->

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Achados e perdidos UDF</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/add.css">	
</head>

<body>

<!-- Imagem e texto do menu -->
<nav class="navbar navbar-light bg-light" style="padding-right:50%;">
  <a class="navbar-brand" href="index.php?page=home">
    <img src="imagens/estrela.png" width="50" height="50" alt="">
  </a>
  <a class="nav-item nav-link" href="index.php?page=home">Inicio</a>
  <a class="nav-item nav-link" href="index.php?page=achados">Achado</a>
  <a class="nav-item nav-link" href="index.php?page=perdidos">Perdido</a>
  <a class="nav-item nav-link" href="index.php?page=blog">Blog de perdidos</a>
</nav>

<!--Alternação entre as paginas -->
<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<?php
					
						include("config.php");
						
						switch(@$_REQUEST["page"]){
							case "achados":
								include("achados.php");
							break;
							case "perdidos":
								include("perdidos.php");
							break;
							case "info":
								include("cadastro.php");
							break;
							case "blog":
								include("blog.php");
							break;
							case "nao-encontrado":
								include("cadastronencontrado.php");
							case "pesquisa":
								include("pesquisa.php");
							break;
							case "pesquisa-blog":
								include("pesquisa-blog.php");
							break;
							default:
								include("home.php");
						}
					?>
				</div>
			</div>
		</div>
        <ul class="pesquisa">
        
        </ul>

<script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

<!--Necessario para iniciar o modal-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Fim do codigo para modal-->
</body>
</html>