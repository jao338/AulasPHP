<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula007</title>
</head>
<body>
    
    <?php
    //Altera o índice dos arrays

    echo "Declaração de arrays <br>";

    $clientes = ["Rodrigo", "Felipe", "Bia"];
    $carros = array(1=>'BMW', 2=>'Veloster', 3=>'Hilux');
    $carros[] = "Amarok";
    $carros[10] = "Celta";

    print_r($carros);
    echo "<br>";
    print_r($clientes);

    echo "<br><br>";

    echo "Função count<br>";

    echo count($clientes);
    echo "<br>";

    echo "Percorrendo array usando foreach<br>";

    foreach($carros as $valor){

        echo $valor."<br>";
    
    }

    echo "<br>Arrays associativos<br>";

    $pessoa = array("Nome" => "Rodrigo", "Idade" => 20);
    $pessoa["Cidade"] = "Rio Claro";

    foreach($pessoa as $indice => $valor){
        echo $indice.":".$valor."<br>";
    }

    echo "<br>Arrays Multidimensionais<br>";

    $times = array(
        "cariocas" => array("primeiro" => "vasco", "segundo" => "flamengo", "terceiro" => "botafogo"),
        "paulistas" => array("santos", "sao paulo", "palmeiras")
    );

    echo $times["paulistas"][2]."<br>";

    foreach($times["cariocas"] as $indice => $valor){
        echo $indice.":".$valor."<br>";
    }

    echo "<br>";

    foreach($times["paulistas"] as $indice => $valor){
        echo $indice.":".$valor."<br>";
    }

    ?>

</body>
</html>