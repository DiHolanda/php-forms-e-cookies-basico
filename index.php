<?php 

	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		var_dump($_POST);

		// mostra os detalhes de arquivos transmitidos por meio de requisição
		var_dump($_FILES);
	}

 ?>

<html lang="pt_BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Formulário</title>
</head>
<body>
	<!-- o enctype="multipart/form-data permite o envio de arquivo através do input file, em vez de transmitir apenas o nome do arquivo" -->
	<form action="index.php" method="post" enctype="multipart/form-data">
		
		<input type="text" name="nome">
		<input type="email" name="email">
		<input type="color" name="color">
		<input type="date" name="date">
		<input type="datetime" name="datetime">
		<input type="file" name="file">
		<input type="number" name="number">
		
		<input type="submit" value="Enviar">

	</form>

	
</body>
</html>