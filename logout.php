<?php 

session_start();

var_dump($_SESSION);

// destrói toda uma sessão
// session_destroy();

// unset para apagar apenas parte do conteúdo da sessão
unset($_SESSION['usuario']);

echo "<hr>";
echo "Logout feito com sucesso. Último login foi em: ". $_SESSION['ultimo-acesso'] . ". Volte sempre!"

 ?>