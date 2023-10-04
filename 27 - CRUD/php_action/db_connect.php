<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$db_name = "CRUD";

$connect = mysqli_connect($serverName, $userName, $password, $db_name);

if(mysqli_connect_error()){
    echo "Erro na conexão: ".mysqli_connect_error();
}

?>