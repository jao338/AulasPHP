<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula018 - Superglobais</title>
</head>
<body>
    
    <?php

    $x = 10;
    $y = 15;

    function soma(){
        echo $GLOBALS['x'] + $GLOBALS['y'];
    }

    soma();

    echo $_SERVER['PHP_SELF']."<br>";       //Retorna o nome do arquivo atual que está sendo executado
    echo $_SERVER['SERVER_NAME']."<br>";       // Retorna o nome do host do servidor que o arquivo está sendo executado
    echo $_SERVER['SCRIPT_FILENAME']."<br>";       //Retorna o caminho absoluto do arquivo que está sendo exucutado 
    echo $_SERVER['DOCUMENT_ROOT']."<br>";       // Retorna a raiz do projeto
    echo $_SERVER['SERVER_PORT']."<br>";       //Retorna qual porta está em execução
    echo $_SERVER['REMOTE_ADDR']."<br>";       //Retorna o endereço IP que o usuário está acessando
    
    ?>

</body>
</html>