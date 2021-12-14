<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="Higor Muros">
		<meta name="description" content="My login page">
		<meta name="keywords" content="login">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" 
		rel="stylesheet" 
		integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" 
		crossorigin="anonymous">
		
		<title>Login</title>
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
              Acesso ao sistema
            </div>
            <div class="card-body">
              <form action="login_op.php" method="post">
                <div class="input-group mb-2">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="input-group mb-2">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>

                <?php 
				
				if(isset($_GET['login']) && $_GET['login'] == 'erro'){

                echo "<div class='text-danger'>
                  Usuário ou senha inválido(s).
                </div>";

                 }
                
				if(isset($_GET['login']) && $_GET['login'] == 'erro2'){

                echo "<div class='text-danger'>
                  Sessão expirada.
                </div>";

                } ?>
				
				<div class="d-grid gap-2 mb-2">
					<button class="btn btn-primary btn-lg" type="submit">Entrar</button>
				</div>
				Não possui cadastro? <a href="newuser.php" class="text-primary">Clique aqui</a>
              </form>
            </div>
          </div>
        </div>
    </div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" 
	crossorigin="anonymous"></script>
  </body>
</html>