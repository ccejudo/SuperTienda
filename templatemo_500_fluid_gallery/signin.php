<?php
  include 'conection.php';
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
