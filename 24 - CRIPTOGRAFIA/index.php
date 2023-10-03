<?php
 
    $senha = '123456';

    $novaSenha = base64_encode($senha);

    echo "Base64 - ". $novaSenha;
    echo "<br>Sua senha é - ". base64_decode($novaSenha)."<hr>";

    echo "Md5 - ". md5($senha)."<hr>";
    echo "Sha1  - ". sha1($senha)."<hr>";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula024 - Criptografia</title>
</head>
<body>
    

</body>
</html>