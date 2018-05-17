<?php
include_once("connection.php");

$query = "INSERT INTO customer(`customerID`, `customerEmail`, `customerName`, `customerOrder`)
  VALUES ('".$_POST["customerID"]."','".$_POST["customerName"]."','".$_POST["customerEmail"]."','".$_POST["customerOrder"]."')";

        if (mysqli_query($connection, $query)) {
             echo "<div>
                <script>
                        window.alert('Customer has been added successfully');
                        window.location.href = 'customers.php?flag=0';
                </script>
                </div>";
            }
         else {
            echo "Error: $sql <br />" . mysqli_error($connection);
        }

?>
