<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula022 - Sessions</title>
</head>
<body>

<?php
       
    session_start();

    $_SESSION['nome'] = 'Jão';

    echo $_SESSION['nome'];
?>
</body>
</html>