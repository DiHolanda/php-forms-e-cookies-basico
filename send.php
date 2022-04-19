<?php 

// exemplo de como pegar dados passados por formulário
// até aqui, nenhuma novidade
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);

var_dump("--FORM-DATA--", $nome, $email, $mensagem);

// pega o conteúdo transferido em formulário via json e o salva na variável como string
$json = file_get_contents("php://input");

// a seguir converte o que foi salvo em string para o objeto de json
$json = json_decode($json);

// da forma a seguir, converte em array em vez de objeto
// $json = json_decode($json, true);

var_dump("--JSON--", $json);


if(is_null($nome)){
    $nome = $json->nome ?? null;
}

if(is_null($email)){
    $email = $json->email ?? null;
}

if(is_null($mensagem)){
    $mensagem = $json->mensagem ?? null;
}

// garante que os valores sejam passados para as variáveis, seja através de form-data ou json
var_dump("--FINAL FANTASY--", $nome, $email, $mensagem);

 ?>