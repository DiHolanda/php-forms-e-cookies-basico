<?php 

	// define o cookie com o próprio nome, a expurar em um dia (3600 segundos equivale a uma hora)
	setcookie('meu-nome', "Di Holanda", time() + ((3600 * 24) * 365));

 ?>