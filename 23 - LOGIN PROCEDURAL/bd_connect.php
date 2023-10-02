<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$db_name = "Login";

$connect = mysqli_connect($serverName, $userName, $password, $db_name);

    if(mysqli_connect_error()){
        echo mysqli_connect_error();
    }else{

    }
?>