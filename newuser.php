<!doctype html>
<?php
if(isset($_GET['new']) && $_GET['new']=='erro'){
	echo "<div class='text-white bg-danger p-2'>Erro ao criar conta. Por favor, tente novamente.</div>";
}
if(isset($_GET['del']) && $_GET['del']=='y'){
	echo "<div class='text-white bg-warning p-2'>Usuário deletado com sucesso.</div>";
}
?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="Higor Muros">
		<meta name="description" content="Criar novo usuário">
		<meta name="keywords" content="Novo usuario">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" 
		rel="stylesheet" 
		integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" 
		crossorigin="anonymous">
		
		<title>Criar conta</title>
		<link rel="icon" href="myicon.png" type="image/png">
    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>
   

    <div class="container mt-5">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Criar conta
            </div>
            <div class="card-body">
              <form action="newuser_op.php" method="post">
			  <div class="input-group mb-2">
                  <input name="nome" type="text" class="form-control" placeholder="Nome completo">
                </div>
                <div class="input-group mb-2">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="input-group mb-2">
                  <input name="senha" id="senha" type="password" class="form-control" placeholder="Senha (4 ou mais caracteres)" oninput="checkpass()" aria-describedby="senhaHelp">
				</div>
				<div class="input-group mb-2">
                  <input name="senha2" id="senha2" type="password" class="form-control" placeholder="Confirme sua senha" oninput="checkpass()">
                </div>
				<div class="d-grid gap-2 mb-2">
					<button id="btn-send" class="btn btn-primary btn-lg" type="submit" disabled>Enviar</button>
				</div>
				Já possui cadastro? <a href="login.php" class="text-primary">Clique aqui</a>
              </form>
            </div>
          </div>
        </div>
    </div>
	</div>
	<script>
	function checkpass(){
		//senha nova
		senha=document.getElementById("senha").value;
		//confirmacao da senha nova
		senha2=document.getElementById("senha2").value;
		//se as 2 senhas forem iguais e tiverem 4 ou mais caracteres...
		if (senha==senha2 && senha.length>=4){
			//...habilitar botao de envio
			document.getElementById("btn-send").disabled=false;
		} else{
			//... se nao, desabilitar botao de envio
			document.getElementById("btn-send").disabled=true;
		}
	}
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" 
	crossorigin="anonymous"></script>
  </body>
</html>