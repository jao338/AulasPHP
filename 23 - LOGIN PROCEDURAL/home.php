<?php
    require_once 'bd_connect.php';

    session_start();

    if(isset($_POST['btn-logout'])){
        session_destroy();

        header('Location: index.php');
    }else if(isset($_POST['btn-login'])){
        header('Location: index.php');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula023 - Sistema de login</title>
</head>
<body>
    
    <h1>Informações do usuário logado</h1>
    <?php 
        
    echo "Id - ".$_SESSION['id']."<br>";
    echo "Nome - ".$_SESSION['nome']."<br>";
    echo "Login - ".$_SESSION['login']."<br>";
    echo "Senha - ".$_SESSION['senha']."<br>";

    ?>

    <form action="" method="POST">
        <button type="submit" name="btn-logout">Log out</button>
    </form>

    <form action="" method="POST">
        <button type="submit" name="btn-login">Log in</button>
    </form>

</body>
</html>