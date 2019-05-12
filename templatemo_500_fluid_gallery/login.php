<?php
  include 'conection.php';
?>
<?php

$username=$_POST['log_user'];
$password=$_POST['log_pass'];

// To protect MySQL injection
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connection,$username);
$password = mysqli_real_escape_string($connection,$password);

$sql = "SELECT * FROM CLIENTE WHERE username='$username' and password='$password'";
$result=mysqli_query($connection,"$sql");

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
echo "asdasfasaas ****************";

// If result matched $username and $password, table row must be 1 row
if($count==1){
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
	echo "SIMON";
	include 'popUpShopM.php';
}else{
	echo "NEL";
}

?>
