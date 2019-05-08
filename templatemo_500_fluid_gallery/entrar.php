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
//dffsdsffsf
// If result matched $username and $password, table row must be 1 row
if($count==1){
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['name_user'] = $nombre;
    include 'index-color.php';
}else{
    echo '<script type="text/javascript">
           window.location = "http://theroommovie.com/"
      </script>';
}

?>
