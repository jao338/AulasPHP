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

    Operadores de compatação:

        ==
        ===
        !=
        !==
        <>
        <
        >
        <=
        >=
        <=>

    */
    
    if(10 == 10){

        echo "Verdadeiro<br> ";

    }else{

        echo "Falso<br> ";

    }

    var_dump(20 <=> 20);
    var_dump(19 <=> 20);
    var_dump(20 <=> 21);

    ?>

</body>
</html>