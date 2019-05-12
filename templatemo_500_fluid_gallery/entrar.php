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
$row = mysqli_fetch_array($result);
$nombre=$row['cliente_nombre'];

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $username and $password, table row must be 1 row
if($count==1){
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['name_user'] = $nombre;
    include 'index-color.php';
}else{
    echo '<script type="text/javascript">
           alert("Usuario o contraseña incorrectos");
      </script>';
    include 'index-color.php';
}

?>
