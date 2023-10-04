<?php

session_start();

require_once 'db_connect.php';

//  Força que o código não exiba nenhum relatório de erro
//  error_reporting(0);

//  Usar try/catch ao invés de if/else, tratamento de erros não funciona corretamente
//  A mensagem de reposta é exibida ao redirecionar ao index.php apenas se as informações foram inseridas corretamente no banco de dados. Quando as informações não são inseridas no banco de dados, uma exceção é acionada

if(isset($_POST['btn-cadastrar'])){

    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobreNome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);

    $sql = "INSERT INTO Clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobreNome', '$email', '$idade')";

    if(mysqli_query($connect, $sql)){
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../index.php');
    }else{
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
        header('Location: ../index.php');
    }
;
}else{

}

?>