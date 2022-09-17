<?php 

$hostname = "localhost";
$bancoDeDados = "gerenciador-salao-de-beleza";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancoDeDados);
if ($mysqli->connect_errno){
    echo "Falha ao conectar";
}