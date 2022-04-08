<?php 
	if(!empty($_REQUEST['nome'])){
		$nome = $_REQUEST['nome'];
	}
	else{
		$nome = "ninguém";
	}
 ?>

<html lang="pt_BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Formulário</title>
</head>
<body>
	<form action="request.php" method="post">
		
		<input type="text" name="nome">
		<input type="text" name="idade">
		
		<input type="submit" value="Enviar">

		<hr>

		<a href="request.php?nome=Anônimo"> Sou anônimo </a>
		<p>  Visitante se identificou como <?php //echo (!empty($_GET["nome"])) ? "O " . $_GET['nome'] : "Ninguém " ; 
			echo $nome;
	?>  </p>

	</form>

	
</body>
</html>