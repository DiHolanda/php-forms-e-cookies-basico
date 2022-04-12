<?php 

require __DIR__."/session.php";

$user = $_SESSION['user'] ?? null;

// se o usuário não estiver autenticado, transfere para a página de login e interrompe a execução da página atual
if(!$user){
	header('location: ./login.php');
	exit();
}

 ?>

 <h1> Olá <?php echo $user['email']; ?> </h1>
 <a href="./logout.php"> Logout </a>