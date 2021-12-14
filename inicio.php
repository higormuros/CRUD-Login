<!doctype html>
<?php
session_start();
if(!isset($_SESSION['autenticado']) || !$_SESSION['autenticado']=='S'){
	header('Location: login.php?login=erro2');
}
?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="robots" content="noindex">
		<meta name="author" content="Higor Muros">
		<meta name="description" content="Pagina inicial">
		<meta name="keywords" content="pagina inicial">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" 
		rel="stylesheet" 
		integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" 
		crossorigin="anonymous">
		
		<title>Página Inicial</title>
		<link rel="icon" href="myicon.png" type="image/png">
  </head>

  <body class="bg-light">
  <nav class='navbar navbar-expand-lg navbar-dark bg-primary'>
  <div class='container'>
	<div class='d-inline-block align-text-top navbar-brand'>Super Sistema</div>
    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
      <span class='navbar-toggler-icon'></span>
    </button>
    <div class='collapse navbar-collapse' id='navbarNav'>
      <ul class='navbar-nav ms-auto'>
        <li class='nav-item'>
          <a href="conta.php" class='nav-link active'>Minha conta</a>
        </li>
        <li class='nav-item'>
          <a href="logout.php" class='nav-link active'>Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
	
	<div class="container pt-5">
		<div class="row">
			<div class="col-md-6 pb-2 px-4">
				<div class="p-4" style="border-top: 5px solid; border-left: 5px solid;">
					<h2>Curso de VBA</h2>
					
					<div class="ratio ratio-16x9">
						
						<iframe class="embed-responsive-item"
						src="https://www.youtube.com/embed/zMcR43cpw8A?controls=0" 
						title="YouTube video player" 
						frameborder="0" 
						allow="accelerometer; 
						autoplay; 
						clipboard-write; 
						encrypted-media; 
						gyroscope; 
						picture-in-picture" 
						allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="col-md-6 pb-2 px-4">
				<div class="px-4 pt-4 pb-5 bg-dark text-white">
					<p>Aula 1 do minicurso de VBA ministrado pelo professor <a href="http://higormuros.com.br" target="_blank" class="text-primary">Higor Muros</a>, do canal "Excel com Higor Muros" e da <a href="https://vcsensei.com.br" target="_blank" class="text-primary">Vc Sensei</a></p>
				</div>
			</div>
		</div>
	</div>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" 
	crossorigin="anonymous"></script>
  </body>
</html>