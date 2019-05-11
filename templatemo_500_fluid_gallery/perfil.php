<?php
 
$nombre = $_SESSION['name_user'];
$user = $_SESSION['username'];

 $quer = mysqli_query($connection, "select * from CLIENTE where CLIENTE.username  = '$user';");

 while ($row_as = mysqli_fetch_assoc($quer)) {
   echo "<tr>";
   echo "<td>".$row_as['pro_tipo']." ".$row_as['pro_nombre']."</td>";
   echo "<td>".$row_as['item_cantidad']."</td>";
   echo "<td>".$row_as['pro_precio']."</td>";
   echo "<td>".$row_as['precio_total']."</td>";
   echo "<td><button type='submit' class='pull-xs-right tm-submit-btn'>Remover</button></td>";
   echo "</tr>";
 }
?>