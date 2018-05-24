<!-- Check User Type at Login  -->
<!-- If the user type is superadmin || admin give access to the admin panel through navigation logged in -->

<?php
  include_once("connection.php");

  session_start();

  if(isset($_POST['email']) || isset($_POST['password'])){


        $query_userType = "SELECT * FROM `users` WHERE email = '".$_POST['email']."'";
        $result = mysqli_query($connection,$query_userType);
        $rows = mysqli_num_rows($result);
        if($rows>0){
          $row = mysqli_fetch_assoc($result);
          if($row["userType"] === 'super admin'){
            $name = $row['username'];
            $type = $row['userType'];
            $_SESSION['name'] = $name;
            $_SESSION['type'] = $type;
            $_SESSION['login']= "true";
            header('Location: index.php');
          }else{
            $name = $row['username'];
            $type = $row['userType'];
            $_SESSION['name'] = $name;
            $_SESSION['type'] = $type;
            $_SESSION['login']= "true";
            header('Location: index.php');
          }
        }
        else{
          echo "<script type='text/javascript'>alert('Incorrect pwd');</script>";
          header('Location: index.php');
        }
      }
 ?>
