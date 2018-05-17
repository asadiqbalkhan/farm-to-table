<?php
  include_once("connection.php");

  $id = $_GET['id'];

  $query1 = "UPDATE inventory
              SET itemCategory = '".$_POST["category"]."', itemPrice= '".$_POST["price"]."', itemName = '".$_POST["product"]."', itemQuantity = '".$_POST["quantity"]."';
              WHERE itemID = 1;"

  $result1 = mysqli_query($connection, $query1);

  header("Location: http://localhost/farm/admin/inventory.php?flag=1");


?>
// Lee: STILL WORKING ON IT
