<?php

include('protect.php');


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página</title>
</head>
<body>
    olá, <?php echo $_SESSION['nome']; ?>

    <p> 
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>