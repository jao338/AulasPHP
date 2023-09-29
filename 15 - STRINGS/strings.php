<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula015 - Strings</title>
</head>
<body>
    
    <?php

    /*

    Funções para strings:

        
        strtolower
        substr
        str_pad
        str_repeat
        strlen
        str_replace
        strpos

    */

    $nome = "Joao Henrique";
    $objeto = "Garrafa";
    $texto = "A seleção argentina é a melhor do mundo";    
    $novoTexto = str_replace("argentina", "brasileira", $texto);
    $novoRightPad = str_pad($objeto, 8, "*");
    $novoLeftPad = str_pad($objeto, 8, "*", STR_PAD_LEFT);
    $novoBothPad = str_pad($objeto, 9, "*", STR_PAD_BOTH);
    $upperNome = strtoupper($nome);
    $lowerNome = strtolower($nome);

    echo $upperNome . "<hr>";
    echo $lowerNome . "<hr>";
    echo substr($nome, 5) . "<hr>";
    echo $novoRightPad . "<hr>";
    echo $novoLeftPad . "<hr>";
    echo $novoBothPad . "<hr>";
    echo str_repeat("Sucesso!",5) . "<hr>";
    echo strlen($nome) . "<hr>";
    echo $novoTexto . "<hr>";
    echo strpos($texto, "mundo") . "<hr>";

    ?>

</body>
</html>