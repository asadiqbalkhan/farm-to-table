<?php
include_once("connection.php");

$query = "UPDATE users
            SET ContactName = 'Alfred Schmidt', City= 'Frankfurt'
            WHERE itemID = 1;"

"INSERT INTO users(`email`, `username`, `password`, `userType`)
  VALUES ('".$_POST["useremail"]."','".$_POST["username"]."','".$_POST["userpassword"]."','".$_POST["usertype"]."')";

        if (mysqli_query($connection, $query)) {
             echo "<div>
                <script>
                        window.alert('User have been added successfully');
                        window.location.href = 'users.php?flag=0';
                </script>
                </div>";
            }
         else {
            echo "Error: $sql <br />" . mysqli_error($connection);
        }

?>
// Lee: STILL WORKING ON IT
