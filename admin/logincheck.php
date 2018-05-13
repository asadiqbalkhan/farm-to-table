<?php
	include "connection.php";
	session_start();

	if(isset($_POST['login_username']) && isset($_POST['login_password'])){

				$query ="SELECT * FROM users WHERE username='".$_POST['login_username']."'";
				$result = mysqli_query($connection,$query);
				$rows = mysqli_num_rows($result);
				if($rows>0){
					$row = mysqli_fetch_assoc($result);
						$_SESSION['login']= "true";
						header('Location: index.php');
				}
			}
?>
