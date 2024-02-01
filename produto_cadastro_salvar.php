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
    //1º: INCLUIR O ARQUIVO DE CONEXÃO DE DADOS
    include 'conexao_bd.php';
    //2º: CAPTURAR OS DADOS INFORMADOS PELO USUARIO NO FRONT
    $descricao = $_POST["txtDescricao"];
    //3º: CODIFICAR O COMANDO SQL PARA EXECUTAR O BANCO DE DADOS
    $sql = "INSERT INTO produto(descricao) VALUES ('$descricao')";
    //4º: EXECUTAR O COMANDO NO BANCO DE DADOS
   if (executarComando($sql))
   {
        echo "<h2>Registro inserido</h2>";
   }
   else{
        echo "<h2>Não foi possível realizar a operação!</h2>";
   }

   ?>
   <a href="produto_cadastro.php">
        <button type="button"> Voltar </button>
    </a>

    <?php 
   include 'footer_admin.php';
    ?>

 
</body>
</html>