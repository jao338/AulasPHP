<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula016 - Numeros</title>
</head>
<body>
    
    <?php

    $db = 1234.56;
    
    $preco = number_format($db, 2, ",", ".");
    echo round($db) . "<br>";
    echo ceil($db) . "<br>";
    echo floor($db) . "<br>";
    echo rand(1,20);

    ?>

</body>
</html>