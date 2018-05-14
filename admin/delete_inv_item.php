<?php
  include_once("connection.php");

  $id = $_GET['id'];
  // Delete users from inventory.php
  $query1 = "DELETE FROM inventory WHERE itemID = $id ";

  $result1 = mysqli_query($connection, $query1);

  header("Location: http://localhost/farm/admin/inventory.php?flag=1");


?>
