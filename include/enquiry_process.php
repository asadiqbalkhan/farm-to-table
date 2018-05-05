<?php
  include_once("database/db.php");
  // PHP Validation process
  if(!isset($_SESSION['attempts'])){
    $_SESSION['attempts']=1;
  }else{
    $_SESSION['attempts']=$_SESSION['attempts']+1;
  }

  $err_generated="";
  //Validating Subject
  if(isset($_POST['subject'])){
    if(strlen($_POST['subject'])>0){
      $subject=$_POST['subject'];
    }else{
      $err_generated="Subject should not be empty<br />";
      $subject="";
    }
  }else{
    $err_generated="Subject not set <br />";
    $subject="";
  }// not set
  //Validating name
  // Validating first name
  if(isset($_POST['name'])){
  	if(strlen($_POST['name'])>0 && strlen($_POST['name'])<=25){
  		if(preg_match("/^[a-zA-Z ]+$/", $_POST['name'])){
  			$firstName=$_POST['name'];
  		}else{
  			$err_generated.="Name should only contain alpha characters<br />";
  			$firstName="";
  		}// preg match
  	}else{
  		$err_generated.="Name should be between 1 and 25 character(s)<br />";
  		$firstName="";
  	}// string length
  }else{
  	$err_generated.="Name not set<br />";
  	$firstName="";
  }// not set
  // Validating email address
  if(isset($_POST['email'])){
  	if(strlen($_POST['email'])>0){
  		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
  			$email=$_POST['email'];
  		}else{
  			$err_generated.="Invalid Email Address Try Again<br />";
  			$email="";
  		}
  	}else{
  		$err_generated.="Email field should not be empty<br />";
  		$email="";
  	}
  }else{
  	$err_generated.="Email not set<br />";
  	$email="";
  }
?>
