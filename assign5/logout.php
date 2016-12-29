<?php

  session_start();
  $username = $_SESSION['username'];
  
  //User tried to access without loggin in.
  if($username == "")
  {
    header("Location:index.php?error=Please login first.");
  }
  
  session_destroy();

  header("Location:index.php?status=You have successfully logged out, ". $username . "!");
  ?>
