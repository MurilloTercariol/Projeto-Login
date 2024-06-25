
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-t from-gray-400 to-sky-500 text-white flex items-center justify-center min-h-screen">

    <div class="container-login w-80 rounded text-center py-2 shadow-lg my-36 min-w-34 backdrop-blur-lg">
        <h3 class="font-bold">Cadastro</h3>
        <div class="box-login text-center items-center grid-cols-1">
            <form class="space-x-1 space-y-4 text-right mr-16" method="POST" action="cadastro.php">
                <label>Nome:</label><input class="text-sm text-black rounded focus:ring-2 focus:outline-none"type="text" name="nome" id="nome"><br>
                <label>Sobrenome:</label><input class="text-sm text-black rounded focus:ring-2 focus:outline-none"type="text" name="sobrenome" id="sobrenome"><br>
                <label>CPF:</label><input class="text-sm text-black rounded focus:ring-2 focus:outline-none"type="text" name="cpf" id="cpf" pattern="\d{3}\.\d{3}\.\{d3}-\d{2}" title="Digite o CPF no formato: xxx.xxx.xxx-xx"><br> 
                <label>E-mail:</label><input class="text-sm text-black rounded focus:ring-2 focus:outline-none"type="text" name="email" id="email"><br>
                <label>Senha:</label><input class="text-sm text-black rounded focus:ring-2 focus:outline-none"type="password" name="senha" id="senha"><br>
                <a href="./login.php"><button type="button" class="mr-6 p-1 bg-slate-800 rounded hover:bg-blue-500">Voltar</button></a>
                <button class="my-2 mx-2 bg-slate-800 rounded p-1 hover:bg-blue-500"type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
</body>
</html>

<?php
if(isset($_POST['cpf']))
include("enviacadastro.php");

?>
