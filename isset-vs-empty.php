<?php 

	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		
		// isset avalia apenas se o campo existe
		var_dump(isset($_POST['nome']));

		// já o empty avalia se o campo está vazio
		var_dump(!empty($_POST['nome']));
		
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