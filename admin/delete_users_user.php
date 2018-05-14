<?php
  include_once("connection.php");

  $id = $_GET['id'];
  // Delete user_ID from users
  $query1 = "DELETE FROM users WHERE user_ID = $id ";

  $result1 = mysqli_query($connection, $query1);

  header("Location: http://localhost/farm/admin/users.php?flag=2");

?>
