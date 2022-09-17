<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
$celular = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_NUMBER_INT);


$result_clientes = "INSERT INTO clientes (nome, sobrenome, endereco, email, cpf, celular, created) VALUES 
('$nome', '$sobrenome', '$endereco', '$email', '$cpf', '$celular', NOW())";

$resultado_usuario = mysqli_query($mysqli, $result_clientes);
?>