<?php
	
	require_once('conexao.php');
	require_once('funcoes.php');

	//você vai verificar se houve post dos campos.====
	//vocè converter o valor do campo senha para md5 e salvar em uma variavel======
	//depois disso voce vai salvar todos campos no baco de dados. a
	//exemplo de como converter a senha para md5
	//$senhamd5 = md5(%_POST['senha']);======

	 if ( isset($_POST['nome']) && isset($_POST['cep']) && isset($_POST['endereco']) && isset($_POST['bairro']) && isset($_POST['telefone'])  && isset($_POST['estados-brasil']) && isset($_POST['cidade']) && isset($_POST['email']) && isset($_POST['usuario']) && isset($_POST['senha']) ) {
	 	$cep = str_replace('-', '', $_POST['cep']);
	 	if ( is_numeric($cep) ){
	 		try {
	 			$InsertPDO = "INSERT INTO login_users (nome, cep, endereco, bairro, telefone, estado, cidade, email, usuario, senha ) VALUES (:nome, :cep, :endereco, :bairro, :telefone, :estado, :cidade, :email, :usuario, :senha )";
	 			$Prepare = $ConPDO->prepare($InsertPDO);
	 			$Prepare->bindParam(':nome', $_POST['nome'], PDO::PARAM_STR);
				$Prepare->bindParam(':cep', $_POST['cep'], PDO::PARAM_INT);
				$Prepare->bindParam(':endereco', $_POST['endereco'], PDO::PARAM_STR);
				$Prepare->bindParam(':bairro', $_POST['bairro'], PDO::PARAM_STR);
				$Prepare->bindParam(':telefone', $_POST['telefone'], PDO::PARAM_INT);
				$Prepare->bindParam(':estado', $_POST['estados-brasil'], PDO::PARAM_STR);
				$Prepare->bindParam(':cidade', $_POST['cidade'], PDO::PARAM_STR);
				$Prepare->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
				$Prepare->bindParam(':usuario', $_POST['usuario'], PDO::PARAM_STR);
				$SenhaMD5 = md5($_POST['senha']);
				$Prepare->bindParam(':senha', $SenhaMD5, PDO::PARAM_STR);
				$Prepare->execute();
				$functions = new Functions;
				$functions->AlertAndRedirect('Cadastro realizado com sucesso!','index.php');
				exit();
	 		}catch (PDOException $e){
	 			echo "Error Message ".$e->getMessage();
	 			header("refresh: 2;URL=index.php");
	 			exit();
	 		}

	 		//echo "Nome: ". $_POST['nome'] ."<br /> CEP: ".$_POST['cep'] ."<br /> Endereco: ". $_POST['endereco'] ."<br /> Bairro: ". $_POST['bairro'] ."<br /> Telefone: ". $_POST['telefone'] ."<br /> Estado: ". $_POST['estados-brasil'] ."<br /> Cidade: ". $_POST['cidade'] ."<br /> Email: ". $_POST['email'] ."<br /> User: ". $_POST['usuario'] ."<br /> Senha: ". $SenhaMD5;


	 	}else{
	 		$functions->AlertAndRedirect('Não Permitido!','index.php');
	 		exit();
	 	}
	 	
	 }else{
		 $functions->AlertAndRedirect('Acesso Negado!','index.php');
		 exit();
	 }
?>