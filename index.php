<?php 

	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		
		// extract extrai o conteúdo de array, colocando cada um em uma variável com o mesmo nome da chave
		extract($_POST);

		var_dump($nome, $idade);
		
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
		<input type="text" name="idade">
		
		<input type="submit" value="Enviar">

	</form>

	
</body>
</html>