<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "nkn-bank";

    $connect = mysqli_connect($servername, $username, $password, $db_name);

    if(mysqli_connect_error()){
        echo "Erro na conexão!";
    }else{
        echo "Conexão bem sucedida!";
    }
?>