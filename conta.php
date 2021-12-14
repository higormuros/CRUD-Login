<!doctype html>
<?php
session_start();
if(!isset($_SESSION['autenticado']) || !$_SESSION['autenticado']=='S'){
	header('Location: login.php?login=erro2');
}else{
	require 'minhaconta_op.php';
}

if(isset($_GET['success']) && $_GET['success']=='y'){
	echo "<div class='text-white bg-success p-2'>Alteração realizada com sucesso!</div>";
}
if(isset($_GET['success']) && $_GET['success']=='f'){
	echo "<div class='text-white bg-danger p-2'>Erro ao atualizar informações! Atualização não realizada.</div>";
}
?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="robots" content="noindex">
		<meta name="author" content="Higor Muros">
		<meta name="description" content="Minha conta">
		<meta name="keywords" content="minha conta">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" 
		rel="stylesheet" 
		integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" 
		crossorigin="anonymous">
		
		<title>Minha conta</title>
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
          <a href="inicio.php" class='nav-link active'>Início</a>
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
			<div class="col-md-6 pb-2 p-4">
				<div class="card">
            <div class="card-header">
              Meus Dados
            </div>
            <div class="card-body">
              <form action="changeuser_op.php" method="post">
			  <input type="hidden" name="id" value="<?php echo $_SESSION['userid']; ?>">
			  <div class="input-group mb-2">
                  <input name="nome" type="text" class="form-control" placeholder="Nome completo" value="<?php echo $user[0][0]; ?>" required>
                </div>
                <div class="input-group mb-2">
                  <input name="email" type="email" class="form-control" placeholder="E-mail" value="<?php echo $user[0][1]; ?>"  required>
                </div>
				<div class="d-grid gap-2 mb-2">
					<button id="btn-send" class="btn btn-primary btn-lg" type="submit">Mudar</button>
				</div>
              </form>
            </div>
          </div>
			</div>
			<div class="col-md-6 pb-2 p-4">
				<div class="card">
            <div class="card-header">
              Mudar Senha
            </div>
            <div class="card-body">
              <form action="changepassword_op.php" method="post">
			  <input type="hidden" name="id2" value="<?php echo $_SESSION['userid']; ?>">
                <div class="input-group mb-2">
                  <input name="novasenha" id="novasenha" type="password" class="form-control" placeholder="Senha nova (4 caracteres ou mais)" oninput="checkpass()">
                </div>
				<div class="input-group mb-2">
                  <input name="novasenha2" id="novasenha2" type="password" class="form-control" placeholder="Confirme a nova senha" oninput="checkpass()">
                </div>
				<div class="d-grid gap-2 mb-2">
					<button id="btn-send2" class="btn btn-primary btn-lg" type="submit" disabled>Mudar</button>
				</div>
              </form>
            </div>
          </div>
			</div>
		</div>
		<a href="killme.php" class="text-primary">Excluir conta</a>
	</div>
	
	<script>
	function checkpass(){
		//senha nova
		senha=document.getElementById("novasenha").value;
		//confirmacao da senha nova
		senha2=document.getElementById("novasenha2").value;
		//se as 2 senhas forem iguais e tiverem 4 ou mais caracteres...
		if (senha==senha2 && senha.length>=4){
			//...habilitar botao de envio
			document.getElementById("btn-send2").disabled=false;
		} else{
			//... se nao, desabilitar botao de envio
			document.getElementById("btn-send2").disabled=true;
		}
	}
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" 
	crossorigin="anonymous"></script>
  </body>
</html>