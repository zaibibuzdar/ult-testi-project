<?php

  if(!isset($_SESSION['auth'])){
    $_SESSION['login_stust'] = "Please login to dashboard";
    header('Location:login.php');
    exit();
    
  }
  

?>