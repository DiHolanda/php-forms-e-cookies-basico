<?php 

require __DIR__."/session.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$_SESSION['user'] = [
		'email' => filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL)
	];
	
	header('location: ./index.php');

	// pelo visto, é uma boa prática colocar exit após header, para garantir que pare a execução do script atual ao transferir
	exit();

}

 ?>

 <h1> Login </h1>
 <hr>

 <form action="" method="post">
 	
 	<input type="text" placeholder="Usuário" name="email">
 	<input type="submit" value="Logar">

 </form>