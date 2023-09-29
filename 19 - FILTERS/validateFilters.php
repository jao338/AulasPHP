<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula019 - Filters</title>
</head>
<body>
    
<?php

if(isset($_POST['enviar-form'])){

    $erros = array();

    if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)){

        $erros[] = "Utilize apenas números!";
    }

    if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)){

        $erros[] = "Utilize apenas números!";

    }

    if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)){

        $erros[] = "IP Inválido!";

    }

    if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)){

        $erros[] = "URL Inválido!";

    }


    if(!empty($erros)){
        foreach ($erros as $erro){
            echo "<li>{$erro}</li>";
        }
    }else{
        echo "Dados validados";
    }
}

?>

    <div>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">

            <p>Validações</p>

            <div>Idade:</div>
            <input type="text" name="idade">

            <div>Peso:</div>
            <input type="text" name="peso">

            <div>IP:</div>
            <input type="text" name="ip">

            <div>URL:</div>
            <input type="text" name="url">

            <input type="submit" name="enviar-form">

        </form>
    </div>

</body>
</html>