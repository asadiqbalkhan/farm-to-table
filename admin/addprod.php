<?php
include_once("connection.php");

$query = "INSERT INTO inventory(`itemCategory`, `itemPrice`, `itemName`, `itemQuantity`,`image`)
  VALUES ('".$_POST["category"]."','".$_POST["price"]."','".$_POST["product"]."','".$_POST["quantity"]."','".$_POST["content"]."')";

        if (mysqli_query($connection, $query)) {
             echo "<div>
                <script>
                        window.alert('Item have been added successfully');
                        window.location.href = 'inventory.php?flag=0';
                </script>
                </div>";
            }
         else {
            echo "Error: $sql <br />" . mysqli_error($connection);
        }

?>
