<?php 

	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		// filtra a entrada, se estiver vazio o valor fica null
		$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
		

		// assim filtra todas as entradas passadas via POST
		// $dados = filter_input_array(INPUT_POST);
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
		<input type="text" name="idade">
		
		<input type="submit" value="Enviar">

	</form>

</body>
</html>