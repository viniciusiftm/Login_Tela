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
  
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="login.php">Login</a></li>
        
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>







	
	<div class="container">
 		<div class="row"> 
 			
 			<div class="col-xs-6 col-sm-4">
 			</div>

 			<div class="col-xs-6 col-sm-4" style="margin-top: 10%;">
 				<form class="jumbotron" action="login_function.php" method="POST" >
 				  <div class="form-group">
      <label for="disabledTextInput">Usuário</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Informe o Usuário">
    </div>
    <div class="form-group">
      <label for="disabledSelect">Senha</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Informe a Senha">
        
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