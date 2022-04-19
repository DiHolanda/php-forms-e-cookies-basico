<?php

require "src/session.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<!-- atalho emmet form>input*4 já cria as tagas form e quatro inputs -->
	<!-- enctype com o valor padrão apenas para demonstração -->
	<form action="send.php" method="POST" enctype="appication/x-www-form-urlencoded">
		<input type="text" name="nome" placeholder="Nome"> <br>
		<input type="email" name="email" placeholder="Email"> <br>
		<textarea name="mensagem" placeholder="Mensagem"></textarea> <br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>