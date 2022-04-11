<?php 

	// define onde as informações serão salvas na sessão
	//session_save_path(__DIR__.'\sessions');

	// começa uma sessão
	session_start();



	// define o cookie com o próprio nome, a expurar em um dia (3600 segundos equivale a uma hora)
	//setcookie('meu-nome', "Di Holanda", time() + ((3600 * 24) * 365));

	// o cookie chega nem a aparecer se estiver fora da validade, como setando sua expiração em um segundo a menos
	// setcookie('meu-nome', "Di Holanda", time() - 1);

	/*$_SESSION['usuario'] = [
		"nome" => "Di Holanda",
		"idade" => 28,
		"ativo" => true,
		"rate" => 1000 * 1000000

	];*/

	unset($_SESSION['usuario']);

?>