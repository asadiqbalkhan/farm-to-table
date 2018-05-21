<?php
include_once("connection.php");
$id = $_GET['id'];


$query = "UPDATE `customer` SET `customerName`='".$_POST["customerName"]."',`customerEmail`='".$_POST["customerEmail"]."',`customerOrder`='".$_POST["customerOrder"]."' WHERE customerID = $id";

        if (mysqli_query($connection, $query)) {
             echo "<div>
                <script>
                        window.alert('Customer has been updated successfully');
                        window.location.href = 'customers.php?flag=0';
                </script>
                </div>";
            }
         else {
            echo "Error: $sql <br />" . mysqli_error($connection);
        }

?>
