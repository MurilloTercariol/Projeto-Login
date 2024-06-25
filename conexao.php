<?php
$hostname = 'localhost';
$bancodedados = 'users' ;
$usuario = 'root';
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

if (!$mysqli) {
    echo 'Deu erro';
} else{
    echo 'conectado';
}

$email = $_POST['email'];
$senha = $_POST['senha'];
