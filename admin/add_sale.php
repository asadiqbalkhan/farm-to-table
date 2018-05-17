<?php
include_once("connection.php");

$query = "INSERT INTO sales(`salesID`, `itemCategory`, `itemName`, `itemQuantity`, `itemID`, `date`, `time`)
  VALUES ('".$_POST["salesID"]."','".$_POST["itemCategory"]."','".$_POST["itemName"]."','".$_POST["itemQuantity"]."','".$_POST["itemID"]."','".$_POST["date"]."','".$_POST["time"]."')";

        if (mysqli_query($connection, $query)) {
             echo "<div>
                <script>
                        window.alert('Sale has been added successfully');
                        window.location.href = 'sales.php?flag=0';
                </script>
                </div>";
            }
         else {
            echo "Error: $sql <br />" . mysqli_error($connection);
        }

?>
