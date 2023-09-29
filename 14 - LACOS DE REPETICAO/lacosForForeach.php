<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula014 - Laços de repetição</title>
</head>
<body>
    
    <?php

    $cores = array("Verde", "Vermelho", "Amarelo");

        for ($i = 1; $i <= 10 ; $i++) { 

           echo "5 x {$i} = ". ($i * 5)."<br>";

        }

        echo "<hr>";

        foreach($cores as $indice => $valor){
            echo ($indice + 1)."-".$valor."<br>";
        }
        

    ?>

</body>
</html>