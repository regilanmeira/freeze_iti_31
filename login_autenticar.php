<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'conexao_bd.php';

        $login_usuario = $_POST["txtLoginUsuario"];
        $senha_usuario = $_POST["txtSenhaUsuario"];

        $sql = "SELECT * FROM usuario WHERE login_usuario = '$login_usuario'";
        $resultado = retornarDados($sql);
        $linha = mysqli_fetch_assoc($resultado);
        if ($login_usuario == $linha["login_usuario"])
        {
            echo $linha["senha_usuario"];
            if (password_verify($senha_usuario,$linha["senha_usuario"]))
            {
                header("location:index_admin.php");
            }
            else
            {
                echo "Credenciais inválidas";
            }

        }

    ?>
</body>
</html>