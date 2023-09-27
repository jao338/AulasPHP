<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula001</title>
</head>
<body>
    
    <?php

        $nome = 'Jão';
        $idade = 22;
        $altura = 1.73;
        $bonito = false;


        echo var_dump($nome);

        if(is_string(($nome))){
            echo 'É uma string';
        }else{
            echo 'Não é uma string';
        }

        echo '<hr><br>';


        echo var_dump($idade);

        if(is_int($idade)){
            echo 'É um int';
        }else{
            echo 'Não é um int';
        }

        echo '<hr><br>';


        echo var_dump($altura);

        if(is_float($altura)){
            echo 'É um float';
        }else{
            echo 'Não é um float';
        }

        echo '<hr><br>';

        echo var_dump($bonito);

        if(is_bool($bonito)){
            echo 'É um boolean';
        }else{
            echo 'Não é um boolean';
        }

        echo '<hr><br>';

    ?>

</body>
</html>