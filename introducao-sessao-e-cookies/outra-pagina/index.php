<?php 

	session_start();

	// mostra o local onde armazena a informação salva em sessão
	// __DIR__ pega o caminho do arquivo atual =
	var_dump($_SESSION['usuario']);

 ?>