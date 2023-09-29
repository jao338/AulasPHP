<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula014 - Laços de repetição</title>
</head>
<body>
    
    <?php

    $contador = 1;

    while ($contador <= 10){

        echo $contador."<br>";

        $contador++;
    }

    echo "<hr>";

    do {
        echo $contador."<br>";

        $contador++;

    } while($contador <= 20);

    ?>

</body>
</html>