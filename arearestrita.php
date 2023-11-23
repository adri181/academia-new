<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/area.css">
    <title>Área restrita</title>
</head>
<body>
    <p>Bem vindo(a)

<?php
    session_start();

    if (isset($_SESSION["nome"]))
    {               
        echo $_SESSION["nome"];
    }
    else
    {
        header("Location: acesso.php");
    }
  
?>

<a href="buscar.php">buscar usuario</a>

</p>

<?php
    include_once("assets/componentes/arearestrita.html");
?>
<?php
    include_once("assets/componentes/cabecalho.html");
?>
<?php
    include_once("assets/componentes/rodape.html");
?>
    
</body>
</html>