<?php

        error_reporting(E_ALL);
        ini_set('display_errors', 1);


        $server = "us-cdbr-iron-east-02.cleardb.net";
        $username = "be18eab0a5770f";
        $password = "660ce38b";
        $db = "heroku_0f8b4834c941ffd";

    $connection = mysqli_connect("$server", "$username", "$password", "$db");

        if (!$connection){
                die("NO SE LOGRÓ CONECTAR CON EL SERVIDOR");
        }

?>
