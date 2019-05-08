<?php
 
$nombre = $_SESSION['name_user'];
$user = $_SESSION['username'];

 $quer = mysqli_query($connection, "select car_id, car_cliente, PRODUCTO.pro_tipo, PRODUCTO.pro_nombre, PRODUCTO.pro_id, PRODUCTO.pro_precio, ITEM_CARRITO.item_cantidad, ITEM_CARRITO.precio_total
from CARRITO
inner join CLIENTE
on CARRITO.car_cliente = CLIENTE.username
inner join ITEM_CARRITO
on CARRITO.car_id = ITEM_CARRITO.item_carrito
inner join PRODUCTO
on ITEM_CARRITO.item_producto = PRODUCTO.pro_id where CLIENTE.username  = '$user';");

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