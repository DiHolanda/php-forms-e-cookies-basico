<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$idade = isset($_POST['idade']) && is_numeric($_POST['idade']) ? 
		(int)$_POST['idade'] : 
		null;

	if(is_null($idade)){
		die("Você deveria informar a sua idade");
	}
	
	if($idade < 18){
		die("Site impróprio para menores de idade");
	}
	else{
		echo "Pode acessar, você tem " . $idade . " anos";
	}
	
		


	
	
	
	
	
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
		
		<input type="text" name="idade" placeholder="idade">
		<input type="submit" value="Enviar">

	</form>

	
</body>
</html>