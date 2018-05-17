<?php
  include_once("connection.php");

  $id = $_GET['id'];
  // Delete user_ID from users
  $query1 = "DELETE FROM sales WHERE salesID = $id ";

  $result1 = mysqli_query($connection, $query1);

  header("Location: http://localhost/farm/admin/sales.php?flag=2");

?>
