<?php

    $servername = "localhost";
    $user = "root";
    $password = "";
    $conn = new mysqli($servername, $user, $password);

    if($conn->connect_error){
        die("Falha na conexão: ". $conn->connection_error);
    }

    $conn->close();

?>