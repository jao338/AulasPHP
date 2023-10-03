<?php

    require_once 'bd_connect.php';

    session_start();

    if(isset($_POST['btn-enviar'])){
        $erros = array();

        $login = mysqli_escape_string($connect, $_POST['login']);
        $senha = mysqli_escape_string($connect, $_POST['senha']);

        if(empty($login) or empty($senha)){
            $erros[] = "<li>O campo login/senha precisam ser informados</li>";
        }else{
            $sql = "SELECT Login FROM Users WHERE Login = '$login'";
            $resultado = mysqli_query($connect, $sql);

            if(mysqli_num_rows($resultado) > 0){
                $senha = md5($senha);
                $sql = "SELECT * FROM Users WHERE Login = '$login' AND Senha = '$senha'";
                $resultado = mysqli_query($connect, $sql);
                
                    if(mysqli_num_rows($resultado) == 1){
                        
                        $dados = mysqli_fetch_array($resultado);
                        mysqli_close($connect);

                        $_SESSION['id'] = $dados['Id'];
                        $_SESSION['nome'] = $dados['Nome'];
                        $_SESSION['login'] = $dados['Login'];
                        $_SESSION['senha'] = $dados['Senha'];

                        header('Location: home.php');
                    }else{
                        $erros[] = "<li>Usuário e senha não conferem</li>";
                    }
            }else{
                $erros[] = "<li>Usuário inexistente</li>";
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