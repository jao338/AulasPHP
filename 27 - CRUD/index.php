<?php
    include_once 'includes/header.php';
    include_once 'php_action/db_connect.php';
    include_once 'includes/message.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        
    <h3 class="light">Clientes</h3>

        <table class="striped">
            <thead>
                <tr>
                    <th>Nome: </th>
                    <th>Sobrenome: </th>
                    <th>Email: </th>
                    <th>Idade: </th>
                </tr>
            </thead>
        
            <tbody>

                <?php

                    $sql = "SELECT * FROM Clientes";
                    $res = mysqli_query($connect, $sql);
                    while($dados = mysqli_fetch_array($res)):
                ?>
                
                    <tr>
                        <td><?php echo $dados['Nome']; ?></td>
                        <td><?php echo $dados['Sobrenome']; ?></td>
                        <td><?php echo $dados['Email']; ?>@gmail.com</td>
                        <td><?php echo $dados['Idade']; ?></td>
                        <td><a href="" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                        <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>
                    </tr>

                <?php endwhile; ?>
            </tbody>
        
        </table>
        <br>
        <a href="adicionar.php" class="btn">Adicionar cliente</a>

    </div>
</div>

<?php

    session_unset();
    include_once 'includes/footer.php';

?>

   