<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula020 - Upload</title>
</head>
<body>

<?php

    if(isset($_POST['enviar-form'])){

        $formatos = array('jpg', "jpeg", "png", "gif");
        $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

        if(in_array($extensao, $formatos)){
            $pasta = "path/";
            $temp = $_FILES['arquivo']['tmp_name'];
            $novoNome = uniqid().".{$extensao}";

            if(move_uploaded_file($temp, $pasta.$novoNome)){
                $mensagem =  "Upload feito com sucesso";
            }else{
                $mensagem =  "Não foi possível fazer o upload";
            }

        }else{
            $mensagem = "Formato inválido";
        }

    }

?>
    
    <div>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST", enctype="multipart/form-data">            
            
        <input type="file" name="arquivo"><br>
        <button type="submit" name="enviar-form">Enviar</button>

        </form>
    </div>

</body>
</html>