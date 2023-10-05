<?php
    include_once 'php_action/db_connect.php';

    include_once 'includes/header.php';


    if(isset($_GET['id'])){
        $id = mysqli_escape_string($connect, $_GET['id']);

        $sql = "SELECT * FROM Clientes WHERE id = '$id'";
        $res = mysqli_query($connect, $sql);

        $dados = mysqli_fetch_array($res);
    }
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        
        <h3 class="light">Editar cliente</h3>

        <form action="php_action/update.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $dados['Id']; ?>">
            
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?php echo $dados['Nome']; ?>">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['Sobrenome']; ?>">
                <label for="sobrenome">Sobrenome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="email" id="email" value="<?php echo $dados['Email']; ?>">
                <label for="email">Email</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="idade" id="idade" value="<?php echo $dados['Idade']; ?>">
                <label for="idade">Idade</label>
            </div>

            <button type="submit" name="btn-editar" class="btn">Editar</button>
            <a href="index.php" class="btn green">Lista de clientes</a>
        </form>

    </div>
</div>

<?php

    include_once 'includes/footer.php';

?>

   