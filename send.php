<?php 

// exemplo de como pegar dados passados por formulário
// até aqui, nenhuma novidade
/*$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);

var_dump($nome, $email, $mensagem);*/

// pega o conteúdo transferido em formulário via json e o salva na variável como string
$json = file_get_contents("php://input");

// a seguir converte o que foi salvo em string para o objeto de json
$json = json_decode($json);

// da forma a seguir, converte em array em vez de objeto
// $json = json_decode($json, true);

var_dump($json);

 ?>