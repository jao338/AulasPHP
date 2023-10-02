<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula021 - Upload</title>
</head>
<body>

<?php

    if(isset($_POST['enviar-form'])){

        $formatos = array('jpg', "jpeg", "png", "gif");
        $qtdArquivos = count($_FILES['arquivo']['name']);
        $contador = 0;

        while ($contador < $qtdArquivos) {
            
            $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);

            if(in_array($extensao, $formatos)){
                $pasta = "path/";
                $temp = $_FILES['arquivo']['tmp_name'][$contador];
                $novoNome = uniqid().".{$extensao}";

                if(move_uploaded_file($temp, $pasta.$novoNome)){
                    echo "Upload feito com sucesso para $pasta$novoNome<br>";
                }else{
                    echo "Não foi possível fazer o upload de $temp";
                }

            }else{
                echo "Formato inválido";
            }

            $contador++;

        }

    }

?>
    
    <div>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST", enctype="multipart/form-data">            
            
        <input type="file" name="arquivo[]" multiple><br>
        <button type="submit" name="enviar-form">Enviar</button>

        </form>
    </div>

</body>
</html>