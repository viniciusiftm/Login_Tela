<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tela de Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilo.css">
  </head>
  <body>
    <!--  NavBar -->
  <?php require_once('view/NavBar.php'); ?>

	
	<div class="container">
 		<div class="row"> 
 			
 			<div class="col-xs-6 col-sm-4">
 			</div>

 			<div class="col-sm-6 col-xs-6" style="margin-top: 10%;">
 				<form class="jumbotron" action="controller/login_function.php" method="POST" >
 				  <div class="form-group">
      <label for="disabledTextInput">Usuário</label>
      <input type="text" name='login' id="disabledTextInput" pattern="[a-zA-ZÀÈÌÒÙàèìòùÁÉÍÓÚáéíóú1-9@_\-\.]" autofocus class="form-control" placeholder="Informe o Usuário" required="required">
    </div>
    <div class="form-group">
      <label for="disabledSelect">Senha</label>
      <input type="password" name='senha' id="disabledTextInput" pattern="[a-zA-ZÀÈÌÒÙàèìòùÁÉÍÓÚáéíóú1-9@_\-\.]" class="form-control" placeholder="Informe a Senha" required="required">
        
      </select>
    </div>
   
    <button type="submit" class="btn btn-success">
        <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Entrar
    </button>

    <a href="registro.php" class="btn btn-success">
        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Cadastrar
    </a>
    
 				</form>
 			</div>

 			<div class="col-xs-6 col-sm-4" >
 			</div>
 			
 		 </div>
	</div> 
	




    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>