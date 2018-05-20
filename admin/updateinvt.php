<?php
include_once("connection.php");
$id = $_GET['id'];


$query = "UPDATE `inventory` SET `itemPrice`='".$_POST["price"]."',`itemName`='".$_POST["product"]."',`itemQuantity`='".$_POST["quantity"]."' WHERE itemID = $id";

        if (mysqli_query($connection, $query)) {
             echo "<div>
                <script>
                        window.alert('Item have been updated successfully');
                        window.location.href = 'inventory.php?flag=0';
                </script>
                </div>";
            }
         else {
            echo "Error: $sql <br />" . mysqli_error($connection);
        }

?>
