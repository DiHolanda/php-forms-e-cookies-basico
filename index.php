<?php 

	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		echo "Formulário enviado por " . $_POST["nome"];
		exit();
	}

 ?>

<html lang="pt_BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Formulário</title>
</head>
<body>
	<form action="index.php" method="post">
		
		<input type="text" name="nome">
		<input type="submit" value="Enviar">

	</form>
</body>
</html>