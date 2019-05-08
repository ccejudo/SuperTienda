<?php

        error_reporting(E_ALL);
        ini_set('display_errors', 1);


    $server = "127.0.0.1";
    $username = "ccejudo";
    $password = "pinguino";
    $db = "supertienda";

    $connection = mysqli_connect("$server", "$username", "$password", "$db");

        if (!$connection){
                die("NO SE LOGRÓ CONECTAR CON EL SERVIDOR");
        }

?>
