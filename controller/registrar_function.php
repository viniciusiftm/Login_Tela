<pre>
<?php
	
	require_once('conexao.php');
	require_once('funcoes.php');

	//verificar se o campo user e email ja existe no banco de dados.	


		$functions = new Functions;
	 if ( isset($_POST['nome']) && isset($_POST['cep']) && isset($_POST['endereco']) && isset($_POST['bairro']) && isset($_POST['telefone']) && isset($_POST['funcao']) && isset($_POST['estados-brasil']) && isset($_POST['cidade']) && isset($_POST['email']) && isset($_POST['usuario']) && isset($_POST['senha']) ) {
		 	$cep = str_replace('-', '', $_POST['cep']);
		 	if ( is_numeric($cep) ){
		 		$user = strtolower($_POST['usuario']);
				$email = $_POST['email'];
				try{
					$PesquiUser = $ConPDO->query("Select * from login_users where usuario='$user' AND email='$email'");
					if ($PesquiUser->rowCount()){
						$functions->AlertAndRedirect('Usuario já cadastrado!','../index.php');
						exit();
					}
				}catch(PDOException  $e ){
					echo "Error: ".$e;
				}
	 			$InsertPDO = "INSERT INTO login_users (nome, cep, endereco, bairro, telefone, funcao, estado, cidade, email, usuario, senha, status ) VALUES (:nome, :cep, :endereco, :bairro, :telefone, :funcao, :estado, :cidade, :email, :usuario, :senha, :status)";
	 			$Prepare = $ConPDO->prepare($InsertPDO);
	 			$Prepare->bindParam(':nome', $_POST['nome'], PDO::PARAM_STR);
				$Prepare->bindParam(':cep', $_POST['cep'], PDO::PARAM_INT);
				$Prepare->bindParam(':endereco', $_POST['endereco'], PDO::PARAM_STR);
				$Prepare->bindParam(':bairro', $_POST['bairro'], PDO::PARAM_STR);
				$Prepare->bindParam(':telefone', $_POST['telefone'], PDO::PARAM_INT);
				$Prepare->bindParam(':funcao', $_POST['funcao'], PDO::PARAM_STR);
				$Prepare->bindParam(':estado', $_POST['estados-brasil'], PDO::PARAM_STR);
				$Prepare->bindParam(':cidade', $_POST['cidade'], PDO::PARAM_STR);
				$Prepare->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
				$Prepare->bindValue(':usuario', strtolower($_POST['usuario']), PDO::PARAM_STR);
				$SenhaMD5 = md5($_POST['senha']);
				$Prepare->bindParam(':senha', $SenhaMD5, PDO::PARAM_STR);
				$Prepare->bindValue(':status', "0", PDO::PARAM_STR);
				if ( $Prepare->execute() ){
					$functions->AlertAndRedirect('Cadastro realizado com sucesso!','../index.php');
				}else{					
					$functions->AlertAndRedirect('Falha ao se cadastrar, tente novamente!','../index.php');
				}
				exit();
	 	}else{
	 		$functions->AlertAndRedirect('Não Permitido!','../index.php');
	 		exit();
	 	}
	 	
	 }else{
		 $functions->AlertAndRedirect('Acesso Negado!','../index.php');
		 exit();
	 }
?>
</pre>