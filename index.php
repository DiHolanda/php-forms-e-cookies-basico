<?php 

	// define o cookie com o próprio nome, a expurar em um dia (3600 segundos equivale a uma hora)
	//setcookie('meu-nome', "Di Holanda", time() + ((3600 * 24) * 365));

	// o cookie chega nem a aparecer se estiver fora da validade, como setando sua expiração em um segundo a menos
	setcookie('meu-nome', "Di Holanda", time() - 1);

 ?>