<?php
  $nombre = $_SESSION['name_user'];
  $user = $_SESSION['username'];

  $quer = mysqli_query($connection, "select car_id, car_cliente, PRODUCTO.pro_tipo, PRODUCTO.pro_stock, PRODUCTO.pro_nombre, PRODUCTO.pro_id, PRODUCTO.pro_precio, ITEM_CARRITO.item_cantidad, ITEM_CARRITO.precio_total
  from CARRITO
  inner join CLIENTE
  on CARRITO.car_cliente = CLIENTE.username
  inner join ITEM_CARRITO
  on CARRITO.car_id = ITEM_CARRITO.item_carrito
  inner join PRODUCTO
  on ITEM_CARRITO.item_producto = PRODUCTO.pro_id where CLIENTE.username  = '$user';");
  $cart_info = mysqli_fetch_assoc($quer);

  $client_info = mysqli_query($connection, "select * FROM CLIENTE where username = '$user';");
  $client_info_row = mysqli_fetch_assoc($client_info);

   while ($row_as = mysqli_fetch_assoc($quer)) {
     echo "<form action='index-color.php' method='post' class='tm-contact-form'>";
     echo "<input type='hidden' name='pro_stock' value='".$row_as['pro_stock']."'>";
     echo "<input type='hidden' name='item_cantidad' value='".$row_as['item_cantidad']."'>";
     echo "<input type='hidden' name='car_id' value='".$row_as['car_id']."'>";
     echo "<input type='hidden' name='pro_id' value='".$row_as['pro_id']."'>";
     echo "<tr>";
     echo "<td>".$row_as['pro_tipo']." ".$row_as['pro_nombre']."</td>";
     echo "<td>".$row_as['item_cantidad']."</td>";
     echo "<td>".$row_as['pro_precio']."</td>";
     echo "<td>".$row_as['precio_total']."</td>";
     echo "<td><button type='submit' name='removeFromCart' class='pull-xs-right'>Remover</button></td>";
     echo "</tr>";
     echo "</form>";
     $_SESSION['total'] = $_SESSION['total'] + $row_as['precio_total'];
   }

   echo "</table>
   <br /> <br />
   <h3 class='tm-text-title'>TOTAL: $".$_SESSION['total']."</h3>
   <br /> <br />
   ";

   if ($_SESSION['total'] > 0) {
     echo "
     <figcaption>
     <a href='#shopping-popup-comprar' class='open-popup-link tm-submit-btn'>COMPRAR</a>
     </figcaption>

     <div id='shopping-popup-comprar' class='white-popup mfp-hide'>
     <h1 class='tm-contact-info' align=left>¡Gracias por tu compra $nombre!</h1>
     <br /> <br />
     <p class='tm-text'>Total: $".$_SESSION['total']."</p>
     <br /> <br />
     <p class='tm-text'>Estamos preparando tu envío con dirección a:</p>
     <p class='tm-text'>".$client_info_row['shipping_ad']."</p>
     <p class='tm-text'>Se ha enviado un correo con los detalles de la compra a:</p>
     <p class='tm-text'>".$client_info_row['mail']."</p>
     <br /> <br />
     <form action = 'index-color.php' method = 'post'>
     <input type='hidden' name='cliente' value='".$client_info_row['username']."'>
     <input type='hidden' name='compra_total' value='".$_SESSION['total']."'>
     <input type='hidden' name='car_id' value='".$cart_info['car_id']."'>
     <button type='submit' name='clearCart' class='pull-xs-right tm-submit-btn'>Regresar</button>
     </form>
     </div>
     ";
   }
?>
