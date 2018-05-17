<?php
  include_once("connection.php");

  $id = $_GET['id'];
  // Delete user_ID from users
  $query1 = "DELETE FROM customer WHERE customerID = $id ";

  $result1 = mysqli_query($connection, $query1);

  header("Location: http://localhost/farm/admin/customers.php?flag=2");

?>
