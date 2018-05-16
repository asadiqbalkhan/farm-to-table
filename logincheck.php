<!-- Check User Type at Login  -->
<!-- If the user type is superadmin || admin give access to the admin panel through navigation logged in -->

<?php
  include_once("connection.php");

  session_start();

  if(isset($_POST['email']) || isset($_POST['password'])){

      //  $query ="SELECT * FROM users WHERE  userType ='".$_POST['login_username']."'";
        $query_userType = "SELECT * FROM `users` WHERE userType = 'super admin'";
        $result = mysqli_query($connection,$query_userType);
        $rows = mysqli_num_rows($result);
        if($rows>0){
          $row = mysqli_fetch_assoc($result);
            $_SESSION['login']= "true";
            header('Location: loginadmin.php');
        }
        else{
          echo "testing testing";
          //header('Location: loginuser.php');
        }
      }
 ?>
<!-- Second logic to the check  -->
 <?php
   // $check = mysqli_query("
   //                       SELECT userType
   //                       FROM users
   //                       WHERE username = '"$username"';
   //                       OR email = '"$email"';
   //                     ");
   //                     $rows = mysql_fetch_row($check);
   //                     if($row[0] == 'super admin'){
   //
   //                       session_start();
   //                       // Redirect the admin to the page from which he can access the ADMIN PANEL in the logged in section in the
   //                       // ---continue.. navigation bar
   //                       header("location: loginadmin.php");
   //                     }
   //                     else {
   //                        echo "Error: $sql <br />" . mysqli_error($connection);
   //                    }
  ?>
