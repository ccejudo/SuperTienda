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
<?php  

$nombre = $_POST['reg_nombre'];
$apell = $_POST['reg_apell'];
$reg_user = $_POST['reg_user'];
$reg_email = $_POST['reg_email'];
$reg_address = $_POST['reg_address'];
$reg_pass = $_POST['reg_pass'];

$reg_nombre = $nombre." ".$apell;


// To protect MySQL injection

$sql = "INSERT INTO CLIENTE
(`username`,
`password`,
`mail`,
`cliente_nombre`,
`shipping_ad`)
VALUES
('$reg_user',
'$reg_pass',
'$reg_email',
'$reg_nombre',
'$reg_address');
";
$result=mysqli_query($connection,"$sql");
include 'index-color.php';

?>