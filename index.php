<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula004</title>
</head>
<body>
    
    <?php

    $nome = 'Jão';
    $a = 1;
    $b = 3;
    $c = 5;

    function exibeNome(){
        global $nome;
        echo $nome;
    }

    function exibeCidade(){
        global $cidade;
        $cidade = "Rio Claro";
    }

    function soma(){
        echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
    }

    exibeNome();
    echo "<hr>";

    exibeCidade();
    echo $cidade;
    
    echo "<hr>";

    soma();

    ?>

</body>
</html>