<?php 
	session_start();

	require_once('conexao.php');
	require_once('funcoes.php');
	$functions = new Functions;
	if (isset($_POST['login']) && isset($_POST['senha'])) {
		$senhamd5 = md5($_POST['senha']);
		$login = $_POST['login'];
		try{ 
			$PesquiUser = $ConPDO->prepare("SELECT * FROM login_users WHERE usuario = :user AND senha = :password;");
			$PesquiUser->bindValue(':user', $login, PDO::PARAM_STR);
			$PesquiUser->bindValue(':password', $senhamd5, PDO::PARAM_STR);
			$PesquiUser->execute();
		}catch(PDOException  $e ){
			echo "Error: ".$e;
		} //fim try catch

		if ($PesquiUser->rowCount()){
			$linha = $PesquiUser->fetch(PDO::FETCH_ASSOC);
			if ($linha['status'] === "1"){
				$_SESSION['user'] = $login;
				$_SESSION['token'] = md5($login." ".$senhamd5);
				$functions->AlertAndRedirect('Login efetuado com sucesso!','../DashBoard/index.php');
				exit();
			}else{
				$functions->AlertAndRedirect('Aguarde em quanto analisamos seu cadastro!','../index.php');
				exit();
			}
		}else{
			$functions->AlertAndRedirect('Usuario, não cadastrado!','../index.php');
			
				exit();
		}

	} //fim if

?>