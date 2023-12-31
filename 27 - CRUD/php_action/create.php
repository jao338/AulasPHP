<?php

session_start();

require_once 'db_connect.php';

function clear($input){
    global $connect;

    $var = mysqli_escape_string($connect, $input);

    $var  = htmlspecialchars($var);
}

if(isset($_POST['btn-cadastrar'])){

    $nome = clear($connect, $_POST['nome']);
    $sobreNome = clear($connect, $_POST['sobrenome']);
    $email = clear($connect, $_POST['email']);
    $idade = $_POST['idade'];

    if(empty($nome) or empty($sobreNome) or empty($email) or empty($idade)){
        $_SESSION['mensagem'] = "Preencha todos os campos!";
        header('Location: ../adicionar.php');
    }else{

        if(is_numeric($idade)){

            $sql = "INSERT INTO Clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobreNome', '$email', '$idade')";
    
            if(mysqli_query($connect, $sql)){
                $_SESSION['mensagem'] = "Cadastrado com sucesso!";
                header('Location: ../index.php');
            }else{
                $_SESSION['mensagem'] = "Erro ao cadastrar!";
                header('Location: ../index.php');
            }
    
        }else{
            $_SESSION['mensagem'] = "Preencha todos os campos corretamente!";
            header('Location: ../adicionar.php');
        }
    }

}else{

}

?>