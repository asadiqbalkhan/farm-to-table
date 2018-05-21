<?php
include_once("connection.php");
$id = $_GET['id'];


$query = "UPDATE `sales` SET `itemCategory`='".$_POST["itemCategory"]."',`itemName`='".$_POST["itemName"]."',`itemQuantity`='".$_POST["itemQuantity"]."', `date`='".$_POST["date"]."', `time`='".$_POST["time"]."' WHERE salesID = $id";

        if (mysqli_query($connection, $query)) {
             echo "<div>
                <script>
                        window.alert('Sale has been updated successfully');
                        window.location.href = 'sales.php?flag=0';
                </script>
                </div>";
            }
         else {
            echo "Error: $sql <br />" . mysqli_error($connection);
        }

?>
