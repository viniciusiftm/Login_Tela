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
        <li class="active"><a href="registro.php">Registrar</a></li>
        
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







	
	<div class="container-fluid">
 		<div class="row"> 
 			
 			<div class="col-xs-6 col-sm-4">
 			</div>

 			<div class="col-xs-6 col-sm-4" style="margin-top: 13%;">
 				<form action="registrar_function.php" method="POST">
 					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1">Nome: </span>
					  <input type="text" class="form-control" name="nome" placeholder="Nome Completo" aria-describedby="basic-addon1" required>
					</div><br />

					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1">Cidade: </span>
					  <input type="text" class="form-control" name="cidade" placeholder="Cidade" aria-describedby="basic-addon1" required>
					</div> <br />

          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Estado: </span>
              <select name="estados-brasil" class="form-control" name="estado" placeholder="Estado" aria-describedby="basic-addon1" required>
                <option value="" selected>Selecione</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
              </select>
          </div> <br />

          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">CEP:    </span>
            <input type="text" class="form-control" name="cep" pattern="[0-9]{5}-?[0-9]{3}" placeholder="00000-000" aria-describedby="basic-addon1" required>
          </div> <br />

          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">E-mail:  </span>
            <input type="email" class="form-control" name="email"  placeholder="email@domain.com" aria-describedby="basic-addon1" required>
          </div> <br />

          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Login:    </span>
            <input type="text" class="form-control" name="login"  placeholder="Login" aria-describedby="basic-addon1" required>
          </div> <br />

          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Senha:    </span>
            <input type="password" class="form-control" name="senha"  placeholder="********" aria-describedby="basic-addon1" required>
          </div> <br />

					<div class="btn-group">
						<button type="submit" class="btn btn-success" aria-expanded="false">
	   			 			Registrar <span class="glyphicon glyphicon-floppy-disk"></span>
	  					</button>
					</div> 
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