<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula010 - Estrutura condicionais IF/ELSE</title>
</head>
<body>
    
    <?php
    
    $numero = 10;
    $media = 7;

    if($numero == 10){
        echo "É igual a 10";
    }else{
        echo "Não é igual a 10";
    }

    echo "<hr>";
    
    //Alternativa

    if($numero == 10):
        echo "É igual a 10";
    elseif($numero <= 9):
        echo "É menor ou igual a 9";
    else:
        echo "É diferente de 10";
    endif;

    echo "<hr>";

    //Alternativa

    echo ($media >= 7) ? "Aprovado" : "Reprovado";

    ?>

</body>
</html>