<?php

function connectionDB() {  
    $db_host = "localhost";
    $db_user = "FilipStraka";
    $db_password = "admin123";
    $db_name = "task_manager";

    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    if (mysqli_connect_error()) {
        echo mysqli_connect_error();
        exit;
    } 

    return $conn;
}
