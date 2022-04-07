<?php 

	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$email = $_POST['email'] ?? null;
		
		// filtra o \ que invalidaria o resto do código
		$email = stripslashes($email);

		// filtra espaços em branco
		$email = trim($email);


		// fitra código html da seguinte maneira
		/*
		* < => &lt
		* > => &gt
		* " => &quote
		* ' => &#039
		* & => &amp
		*/
		$email = htmlspecialchars($email);
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
		
		<input type="text" name="email">
		<input type="submit" value="Enviar">

	</form>

</body>
</html>