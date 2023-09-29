<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula017 - Funções</title>
</head>
<body>
    
    <?php

    function exibirNome($nome){
        echo $nome . "<br>";
    }

    function calcularMedia($nome, $n1, $n2, $n3){
        $media = ($n1 + $n2 + $n3) / 3;
    
        if($media >= 7){
            echo "{$nome} foi aprovado com a média {$media}";
        }else{
            echo "{$nome} foi reprovado com a média {$media}";
        }
    }

    exibirNome("João");
    calcularMedia("João", 8,6,7);

    ?>

</body>
</html>