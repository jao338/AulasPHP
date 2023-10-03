<?php
    
    //A criptografia do tipo bcrypt sempre(ou quase sempre) gera um hash de 60 caracteres. Toda senha criptografada usando o bcrypt será diferente, mesmo que a senha original seja a mesma. Em outras palavras, uma mesma senha gera um infinidade de hash's.

    $senha = '123456';
    $senha_db = '$2y$10$JcBHXD.DAOvaEQzNpVwFBeQcu68mPhaJD3LZVEry.6LGhC/QMDtn2';

    //  O parâmetro 'cost' do arrray "$options" determina quanto processamento será usado para criar o hash, quanto maior o valor, mais seguro será o hash.
    $options = [
        'cost' => 10
    ];

    //  Gera uma senha usando criptografia BCRYPT
    $senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);

    // A única maneira de verificar se uma senha é igual a um hash bcrypt, usamos a função 'password_varify()'
    if(password_verify($senha, $senha_db)){
        echo "As senhas são iguais";
    }else{
        echo "As senhas não são iguais";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula025 - Password_hash</title>
</head>
<body>
    

</body>
</html>