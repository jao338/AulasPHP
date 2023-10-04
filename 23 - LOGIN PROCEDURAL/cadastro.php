<?php

    require_once 'bd_connect.php';

    session_start();

    if(isset($_POST['btn-enviar'])){
        $erros = array();

        $nome = mysqli_escape_string($connect, $_POST['nome']);
        $login = mysqli_escape_string($connect, $_POST['login']);
        $senha = mysqli_escape_string($connect, $_POST['senha']);

        //  Verifica se alguma dos dois campos foi preenchido
        if(empty($login) || empty($senha) || empty($nome)){
            $erros[] = "<li>Preencha todos os campos corretamente.</li>";
        }else{

            $senha = md5($senha);
            $sql = "INSERT INTO `Users` (`Id`, `Nome`, `Login`, `Senha`) VALUES (NULL, '$nome', '$login', '$senha')";

            $insert = mysqli_query($connect, $sql);

            if($insert == 1){
                $sql = "SELECT * FROM Users WHERE login = '$login' AND Senha = '$senha'";

                $busca = mysqli_query($connect, $sql);
                $dados = mysqli_fetch_array($busca);

                $_SESSION['id'] = $dados['Id'];
                $_SESSION['nome'] = $dados['Nome'];
                $_SESSION['login'] = $dados['Login'];
                $_SESSION['senha'] = $dados['Senha'];

                header('Location: home.php');

            }
                        
        }

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula023 - Sistema de login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main>
        <div class="login">
            <h1>Sistema de cadastro</h1>

            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" style="margin-top:32px">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome"><br>

            <label for="login">Login:</label>
            <input type="text" name="login" id="login"><br>

            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha"><br>

            <div class="btn">
                <button type="submit" name="btn-enviar" style="height: 24px; width: 64px;">Cadastro</button>
            </div>

            </form>
        </div>
    </main>

</body>
</html>