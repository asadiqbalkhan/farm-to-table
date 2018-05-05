<?php
  session_start();
  session_destroy();
  //Display message to website administrators
  echo "Website has been reset to its original state\n";
  echo "Careful of DDOS/SQL Injection\n";
  echo "Contact Technology Team if security enabled again or report at securitythreat@farmable.com\n"
 ?>
