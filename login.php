<?php
if(isset($_POST["email"]) && $_POST["senha"])
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])){
    if(strlen($_POST['email']) == 0){
        echo 'Preencha o campo de E-mail';
    } else if (strlen($_POST['senha']) == 0){
        echo 'Preencha o campo de senha';
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        

        $sql_code = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha' ";
        $sql_query = $mysqli->query($sql_code) or die("Falha no SQL: " .mysqli_error($mysqli));

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: pagina.php");

        } else {
            echo "Falha ao logar, email ou senha incorretos.";
        }
    } 
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-t from-gray-400 to-sky-500 text-white flex items-center justify-center min-h-screen">

    <div class="container-login w-64 rounded text-center py-2 shadow-lg my-36 min-w-32 backdrop-blur-lg">
        <h3 class="font-bold">Login</h3>
        <div class="box-login">

            <form class="space-x-1 space-y-4 text-center" method="POST" action="">
                
                <label>E-mail:</label><input class="text-sm text-black rounded focus:ring-2 focus:outline-none"type="text" name="email" id="email"><br>

                    <label>Senha:</label><input class="text-sm text-black rounded focus:ring-2 focus:outline-none"type="password" name="senha" id="senha"><br>

                    <button class="bg-slate-800 rounded p-1 hover:bg-blue-500"type="submit">Entrar</button>
                
                    <h3>Não possui cadastro?</h3>

                <a class="hover:text-purple-300 hover:underline"href="./cadastro.php">Cadastre-se</a>
           
            </form>

        </div>
    </div>
</body>
</html>