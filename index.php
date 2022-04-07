<?php 

	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$email = $_POST['email'] ?? null;
		$email = trim($email);
		var_dump($email);
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
		
		<input type="email" name="email">
		<input type="submit" value="Enviar">

	</form>

</body>
</html>