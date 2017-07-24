<?php
	//você vai verificar se houve post dos campos.
	//vocè converter o valor do campo senha para md5 e salvar em uma variavel
	//depois disso voce vai salvar todos campos no baco de dados. a
	
	//exemplo de como converter a senha para md5
	//$senhamd5 = md5(%_POST['senha']);
	 if ( isset($_POST['nome']) && isset($_POST['cidade']) && isset($_POST['estado']) && isset($_POST['cep']) && isset($_POST['login']) && isset($_POST['senha']) && isset($_POST['email'])   ) {
	 	$cep = str_replace('-', '', $_POST['cep']);
	 	if ( is_numeric($cep) ){
	 		//registrar no banco de dados.
	 		//header("Location: login.php");

	 		//exemplo de insert into
	 		//INSERT INTO (" 'nome', 'cidade', 'estado', 'cep', 'login', 'senha', 'email' " VALUE $_POST['nome'], $_POST['cidade'], $_POST['estado'], $_POST['cep'], $_POST['login'], $senhamd5, $_POST['nome'])

	 		echo "True";

	 	}else{
	 		echo "Error";
	 	}
	 	
	 }else{
	 	echo  $_POST['cep']." Error no campo cep!";
	 }
?>