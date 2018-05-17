<?php
  // get post item
include_once("connection.php");

  $email = $_POST['email'];
  $username = $_POST['password'];
  $password = $_POST['password'];

		$query= "INSERT INTO users(email, username, password, userType) VALUES ('".$_POST["email"]."','".$_POST["username"]."','".$_POST["password"]."','user')";

    $.confirm({
        title: 'Congratulations!',
        content: 'You have successfully registered at Farmable',
        buttons: {
            confirm: function () {
                $.alert('Welcome!');
            },
            }
        }
    });

        if (mysqli_query($connection, $query)) {
             echo "<div>
                <script>
                        window.alert('You have successfully registered at Farmable!');
                        window.location.href = 'index.php';
                </script>
                </div>";
            }
         else {
            echo "Error: $sql <br />" . mysqli_error($connection);
        }

?>
