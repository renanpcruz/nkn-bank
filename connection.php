<?php

    $servername = "localhost";
    $user = "root";
    $password = "";
    $db_name = "nkn-bank";
    $conn = mysql_connect($servername, $user, $password, $db_name);

    if(mysql_connect_error()){
        echo "Erro na conexão: ".mysql_connect_error();
    }
?>