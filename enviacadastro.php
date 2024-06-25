<?php


$hostname = 'localhost';
$bancodedados = 'users' ;
$usuario = 'root';
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);


if (isset($_POST['cpf'])) {
$cpf = $_POST['cpf'];

$sql = "SELECT cpf FROM cadastro WHERE cpf = '$cpf' ";

$retorno = mysqli_query($mysqli, $sql);

$pattern = '/^\d{3}\.\d{3}\.\d{3}\-\d{2}$/';

if(mysqli_num_rows($retorno) > 0 || !preg_match($pattern, $cpf)) {
    echo "CPF inválido <br>";
}elseif (!isset($_POST["$nome"], $_POST["sobrenome"], $_POST["cpf"], $_POST["email"], $_POST["senha"])) {
    echo "Preencha todos os campos.";
} else {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = ($_POST['senha']);

    $sql = "INSERT INTO cadastro (nome, sobrenome, cpf, email, senha) value('$nome','$sobrenome','$cpf','$email','$senha')";
    $resultado = mysqli_query($mysqli, $sql);

    $sql_2 = "INSERT INTO usuarios (email, senha) value('$email','$senha')";
    $resultado_2 = mysqli_query($mysqli, $sql_2);

    echo "Usuário cadastrado com sucesso";
}
}