<?php

    require_once 'bd_connect.php';

    session_start();

    if(isset($_POST['btn-enviar'])){
        $erros = array();

        $login = mysqli_escape_string($connect, $_POST['login']);
        $senha = mysqli_escape_string($connect, $_POST['senha']);

        //  Verifica se alguma dos dois campos foi preenchido
        if(empty($login) || empty($senha)){
            $erros[] = "<li>O campo login/senha deve ser preenchido</li>";
        }else{
            //  Faz a busca leo usuário no banco de dados
            $sql = "SELECT login FROM Users WHERE login = '$login'";

            $res = mysqli_query($connect, $sql);

            //  Verifica se a variável '$res' possui algum registro
            if(mysqli_num_rows($res) > 0){

                $sql = "SELECT * FROM Users WHERE login = '$login' AND senha = '$senha'";

                $res = mysqli_query($connect, $sql);
                
                $dados = mysqli_fetch_array($res);

                $_SESSION['id'] = $dados['Id'];
                $_SESSION['nome'] = $dados['Nome'];
                $_SESSION['login'] = $dados['Login'];
                $_SESSION['senha'] = $dados['Senha'];

                header('Location: home.php');

            }else{
                $erros[] = "<li> Usuário inexistente</li>";
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
            <h1>Sistema de login</h1>

            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" style="margin-top:32px">

            <label for="login">Login:</label>
            <input type="text" name="login" id="login"><br>

            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha"><br>

            <div class="btn">
                <button type="submit" name="btn-enviar" style="height: 24px;">Login</button>
            </div>

            </form>
        </div>
    </main>
    

    <?php 
    
        if(!empty($erros)){
            foreach ($erros as $erro) {
                echo "$erro<br>";
            }
        }

    ?>

    

</body>
</html>