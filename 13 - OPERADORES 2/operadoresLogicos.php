<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula013 - Operadores</title>
</head>
<body>
    
    <?php

    /*

    Operadores lógicos

        && ou and- Retorna true caso todas as comparações forem verdadeiras
        || ou or - Retorna true caso pelo menos uma das comparações for verdadeira
        xor - Retorna true caso APENAS UMA comparação for verdadeira
        ! - Nega uma expressão
    */

    $nome = "João";
    $idade = 22;    

    if(($nome == "João") && ($idade == 22)){
        echo "Verdadeiro";
    }else{
        echo "Falso";
    }

    echo "<br>";

    if(($nome == "João") || ($idade == 23)){
        echo "Verdadeiro";
    }else{
        echo "Falso";
    }

    echo "<br>";

    if(($nome == "João") xor ($idade == 23)){
        echo "Verdadeiro";
    }else{
        echo "Falso";
    }

    echo "<br>";

    if(!($nome == "João") && ($idade == 22)){
        echo "Verdadeiro";
    }else{
        echo "Falso";
    }

    ?>

</body>
</html>