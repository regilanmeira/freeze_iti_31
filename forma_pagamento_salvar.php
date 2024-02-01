<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'header_admin.php';

        include 'conexao_bd.php';
        $descricao = $_POST["txtDescricao"];
        $sql = "INSERT INTO forma_pagamento(descricao) VALUES ('$descricao')";

        if (executarComando($sql))
        {
            echo "<h2>Registro Inserido</h2>";
        }
        else
        {
            echo "<h2>Não foi possível adicionar</h2>";
        }

        include 'footer_admin.php';
    ?>
</body>
</html>