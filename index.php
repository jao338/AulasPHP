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
        $array = array("Gol", "Uno", "Camaro", 20, 20.1, true);
        $cidade = NULL;


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

        echo var_dump($array);

        if(is_array($array)){
            echo 'É um array';
        }else{
            echo 'Não é um array';
        }

        echo '<hr><br>';

        class Cliente{
            public $nome;

            public function atribuirNome($nome){
                $this->$nome = $nome;
            }

        }

        $cliente = new Cliente();

        $cliente->atribuirNome("Rodrigo");
            
        var_dump($cliente);

        if(is_object($cliente)){
            echo 'É um object';
        }else{
            echo 'Não é um object';
        }

        echo '<hr><br>';

        echo var_dump($cidade);

        
    ?>

</body>
</html>