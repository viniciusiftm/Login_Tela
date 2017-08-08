<?php
session_start();
if (!isset($_SESSION['token'])){
	die("<h1>"."Acesse Restrito"."</h1>");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>DashBoard</title>
</head>
<body>

	<h1>"Voce Conseguiu me acessar"!</h1>

</body>
</html>