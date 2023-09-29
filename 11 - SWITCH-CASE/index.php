<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula011 - Estrutura condicional SWITCH CASE</title>
</head>
<body>
    
    <?php
    
    $cor = "Rosa";

    switch ($cor):
    
        case "Vermelho":
            echo "Sua cor favorita é o vermelho";
            break;

        case "Azul" :
            echo "Sua cor favorita é o azul";
            break;

        default: 
        echo "Sua cor favorita não é vermelho nem azul";

    endswitch;
    
    ?>

</body>
</html>