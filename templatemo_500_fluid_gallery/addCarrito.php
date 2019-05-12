<?php
include 'conection.php';

$user = $_SESSION['username'];
$quantity = $_POST['quantity'];
$size = $_POST['clothe_size'];
$item = $_POST['item'];
$cat_id = $_POST['cat_id'];
$item_id = "";
$car_id = "";

$subtotal = 0;
$new_stock = 0;

// To protect MySQL injection
//$quantity = stripslashes($quantity);
$size = stripslashes($size);
$item = stripslashes($item);
$cat_id = stripslashes($cat_id);
//$quantity = mysqli_real_escape_string($connection,$quantity);
$size = mysqli_real_escape_string($connection,$size);
$item = mysqli_real_escape_string($connection,$item);
$cat_id = mysqli_real_escape_string($connection,$cat_id);

if ($cat_id != 'OTR') {
  $sql = "select * from PRODUCTO where pro_nombre = '$item' and pro_talla = '$size' and cat_id = '$cat_id';";
  $result=mysqli_query($connection,"$sql");
  $row = mysqli_fetch_array($result);
}
else {
  $sql = "select * from PRODUCTO where pro_nombre = '$item' and pro_talla is NULL and cat_id = '$cat_id';";
  $result=mysqli_query($connection,"$sql");
  $row = mysqli_fetch_array($result);
}


$getCarrito = mysqli_query($connection, "select * from CARRITO where car_cliente = '$user';");
$getCarritoRow = mysqli_fetch_array($getCarrito);

$car_id = $getCarritoRow['car_id'];
$item_id = $row['pro_id'];
$item_id = stripslashes($item_id);
$item_id = mysqli_real_escape_string($connection,$item_id);

  if ($quantity <= $row['pro_stock']) {
    echo "<body onLoad = 'addedToCartAlert();'>";
    $subtotal = $quantity * $row['pro_precio'];
    $new_stock = $row['pro_stock'] - $quantity;

    $insert_sql = mysqli_query($connection, "insert into ITEM_CARRITO (item_carrito, item_producto, item_cantidad, precio_total) values ($car_id, '$item_id', $quantity, $subtotal);");
    $update_sql = mysqli_query($connection, "update `PRODUCTO` SET `pro_stock` = '$new_stock' WHERE `pro_id` = '$item_id';");
  }
  else {
    echo "<body onLoad = 'notAddedToCartAlert();'>";
  }

?>
