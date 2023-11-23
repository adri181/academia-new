<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    include_once("../conn.php");

    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $telefone = $_REQUEST['telefone'];
    $endereco = $_REQUEST['endereco'];
    $senha = md5($_REQUEST['senha']);

    $sql = "INSERT INTO cadastro (nomecompleto, email, telefone, endereco, senha) VALUES ('$nome', '$email', '$telefone', '$endereco', '$senha')";

    if ($conn->query($sql) == TRUE)
    {
        echo "<p>Cadastro realizado.</p>";
    }
    else
    {
        echo "<p>Erro.</p>";
    }

    $conn->close();

?>

    <a href="../../../index.php">Voltar ao início</a>

</body>
</html>