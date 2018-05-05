<?php
  session_start();
  //Hardening of the website by adding anti-spam feature
  if(isset($_SESSION['attempts']) && $_SESSION['attempts']>3){
?>
  <script type = "type/text/javascript">
  window.onload=function(){
    alert("SECURITY THREAT DETECTED - WEBSITE ACCESS DENIED\n");
    alert("Contact: technicalproblem@farmable.com")
  }
  </script>
<?php
  exit;
}
  // User name for local host database phpMyAdmin - root
  // Password for local host database phpMyAdmin - null/empty
  // establish connection with the database
  $con = mysqli_connect("localhost","root","","farmable");

 ?>
