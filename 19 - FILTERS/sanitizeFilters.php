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

    $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);

    $idade = filter_input(INPUT_POST,'idade',FILTER_SANITIZE_NUMBER_INT);
    if(!filter_var($idade, FILTER_VALIDATE_INT)){
        $erros[] = "Idade precisa ser um inteiro";
    }

    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $erros[] = "Email inválido";
    }
    
    $url = filter_input(INPUT_POST,'url',FILTER_SANITIZE_URL);
    if(!filter_var($url, FILTER_VALIDATE_URL)){
        $erros[] = "URL inválido";
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
            
            <div>Nome:</div>
            <input type="text" name="nome">

            <div>Idade:</div>
            <input type="text" name="idade">

            <div>Email:</div>
            <input type="text" name="email">

            <div>URL:</div>
            <input type="text" name="url">

            <input type="submit" name="enviar-form">

        </form>
    </div>

</body>
</html>