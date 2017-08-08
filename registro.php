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
  <?php  require_once('view/NavBar.php'); ?>



	
	<div class="container-fluid">
 		<div class="row"> 
 			
 			<div class="col-xs-6 col-sm-4">
 			</div>

 			<div class="col-xs-6 col-sm-4" style="margin-top: 0%;">
 				<form action="controller/registrar_function.php" method="POST">
 					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1">Nome:       </span>
					  <input type="text" class="form-control" name="nome" placeholder="Nome Completo" aria-describedby="basic-addon1" required>
					</div><br />

          
					<div class="input-group">
            <span class="input-group-addon" id="basic-addon1">CEP:        &nbsp</span>
            <input type="text" class="form-control" name="cep" pattern="\d{5}-?\d{3}" placeholder="00000-000" oninvalid="setCustomValidity('Seu CEP deve conter os seguintes formatos: 00000-000 ou 00000000')" Onkeyup="try{setCustomValidity('')}catch(e){}" maxlength="9" aria-describedby="basic-addon1" required>
          </div> <br />

          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Endereço: </span>
            <input type="text" class="form-control" name="endereco" placeholder="Informe seu Endereço" maxlength="30" aria-describedby="basic-addon1" required>
          </div><br />

          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Bairro:       </span>
            <input type="text" class="form-control" name="bairro" placeholder="Informe seu Bairro" maxlength="30" aria-describedby="basic-addon1" required>
          </div><br />

          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Telefone:   </span>
            <input type="text" class="form-control" name="telefone" pattern="[0]?[1-9]{2}[9]?[0-9]{4}-?[0-9]{4}" placeholder="(11)91111-1111"aria-describedby="basic-addon1" required="required">
          </div><br />
          
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Funcao:     </span>
              <select name="funcao" class="form-control" aria-describedby="basic-addon1" required>
                <option value="" selected>Selecione</option>
                <option value="funcionario">Funcionario</option>
                <option value="cliente">Cliente</option>
                <option value="fornecedores">fornecedores</option>
              </select>
          </div><br />


          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Estado:     </span>
              <select name="estados-brasil" class="form-control" name="estado" aria-describedby="basic-addon1" required>
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
            <span class="input-group-addon" id="basic-addon1">Cidade:    &nbsp</span>
            <input type="text" class="form-control" name="cidade" placeholder="Cidade" aria-describedby="basic-addon1" required>
          </div> <br />

          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">E-mail:    &nbsp&nbsp</span>
            <input type="email" class="form-control" name="email"  placeholder="email@domain.com" aria-describedby="basic-addon1" required>
          </div> <br />

          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Usuário:  &nbsp&nbsp</span>
            <input type="text" class="form-control" name="usuario"  placeholder="Informe o Usuário" aria-describedby="basic-addon1" required>
          </div> <br />

          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Senha:    &nbsp&nbsp</span>
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






