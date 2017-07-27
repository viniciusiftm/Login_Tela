<?php 
	$host = "localhost";
	$dbname = "registro_de_login";
	$user = "vinicius";
	$password = "vinicius132066";

	try{
		$ConPDO = new PDO ("mysql:host=$host;dbname=$dbname", "$user","$password");
	}catch( PDOExcption $e ){
		echo "Error Code". $e->getCode()."<br />".$e->GetMessage();
	}
?>