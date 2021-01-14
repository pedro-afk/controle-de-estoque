<?php
    $host="localhost";
    $user="root";
    $pass="";
    $database="estoque";

    try{
        $connection = mysqli_connect($host, $user, $pass, $database);

        $database = mysqli_select_db($connection, $database);
    } catch (Exception $e) {
        echo "An error ocurred!";
    }    
    
    @mysqli_set_charset($connection,"utf8");
?>