<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula008</title>
</head>
<body>
    
    <?php
    
    $nomes = array("Amigo" => "Rodrigo", "Amiga" => "Maria", "Gestor" => "José");
    $keys = array_keys($nomes);
    $values = array_values($nomes);
    $carros = array("Uno", "Celta");
    $motos = array("Pop100", "cb1000");
    $veiculos = array_merge($carros, $motos);
    $chaves = array("Primeiro", "Segundo", "Terceiro");
    $valores = array("Bahia", "Goiás", "Chapecoense");
    $times = array_combine($chaves, $valores);
    $soma = array(5,6,8,10);
    $data = "30/02/2019";
    $novaData = explode('/', $data);
    $letras = array("J", "o", "ã", "o");
    $string = implode("", $letras);

    echo "is_array() <br>";

    if(is_array($nomes)){
        echo "É um array";
    }else{
        echo "Não é um array";
    }

    echo "(Retorna true caso for um array)";


    echo "<hr> in_array() <br>";

    if(in_array("Luva de pedreiro", $nomes)){
        echo "Exite no array";
    }else{
        echo "Não existe no array";
    }

    echo "(Retorna true caso exista dentro do array)";


    echo "<hr> arrays_keys <br>";

    foreach($keys as $value){
        echo $value." ";
    }

    echo "(Retorna os índices do array escolhido)";
    echo "<hr> arrays_values <br>";

    foreach($values as $value){
        echo $value." ";
    }

    echo "(Retorna os valores do array escolhido)";
    echo "<hr> array_merge <br>";

    foreach($veiculos as $value){
        echo $value." ";
    }

    echo "(Concatena dois ou mais arrays)";

    
    echo "<hr> arrays_pop <br>";

    foreach($veiculos as $value){
        echo $value." ";
    }

    echo "(Adiciona um valor ao final do array)";

    echo "<br>";

    echo array_pop($veiculos);
    
    foreach($veiculos as $value){
        echo $value." ";
    }

    echo "<hr> arrays_shift <br>";

    foreach($veiculos as $value){
        echo $value." ";
    }

    echo "(Adiciona um valor ao inicio do array)";

    echo "<br>";

    echo array_shift($veiculos);
    
    foreach($veiculos as $value){
        echo $value." ";
    }

    echo "<hr> arrays_unshift <br>";

    print_r($veiculos);

    array_unshift($veiculos, "XJ6", "Monza");
    echo "<br>";
    print_r($veiculos);
    echo "(Adiciona um ou mais valores no início array escolhido)";

    echo "<hr> arrays_push <br>";

    print_r($veiculos);

    array_push($veiculos, "Bicicleta", "HB20");
    echo "<br>";
    print_r($veiculos);
    echo "(Adiciona um ou mais valores no final do array escolhido)";

    echo "<hr> arrays_combine <br>";

    print_r($times);

    echo "(Combina dois arrays, sendo um deles com os indices e o outro com os valores)";
    
    echo "<hr> array_sum <br>";

    echo array_sum(($soma));

    echo "(Retorna a soma de todos os valores do array)";

    echo "<hr> array_explode <br>";

    print_r($novaData);

    echo "(Transforma uma string em array)";

    echo "<br>";

    echo "<hr> array_implode <br>";

    print_r($string);

    echo "(Transforma um array em uma string)";

    echo "<br>"

    ?>

</body>
</html>