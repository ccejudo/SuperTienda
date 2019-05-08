<?php

        error_reporting(E_ALL);
        ini_set('display_errors', 1);


    $server = "";
    $username = "";
    $password = "";
    $db = "";

    $connection = mysqli_connect("$server", "$username", "$password", "$db");

        if (!$connection){
                die("NO SE LOGRÓ CONECTAR CON EL SERVIDOR");
        }

?>
