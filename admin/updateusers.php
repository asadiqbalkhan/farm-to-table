<?php
include_once("connection.php");
$id = $_GET['id'];


$query = "UPDATE `users` SET `username`='".$_POST["username"]."',`email`='".$_POST["useremail"]."',`password`='".$_POST["pwd"]."' WHERE user_ID = $id";

        if (mysqli_query($connection, $query)) {
             echo "<div>
                <script>
                        window.alert('User have been updated successfully');
                        window.location.href = 'users.php?flag=0';
                </script>
                </div>";
            }
         else {
            echo "Error: $sql <br />" . mysqli_error($connection);
        }

?>
