<?php
  session_start();
  error_reporting(0);
  $error = $_GET['error'];
  $status = $_GET['status'];
  $username = $_SESSION['username'];
  
 
  if($username == "")
  {
    header("Location:index.php?error=Please login first.");
  }
include 'validate.php';
?>

<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
    <title>COP 4813: Internet Programming</title>
    <link rel="stylesheet" href="../normalize.css">
  <link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../assign1/style.css">
    <link rel="stylesheet" href="../responsive.css">
    <script src="main.js" type="text/javascript"></script>
  <meta name="viewport" content="width=divice-width, initial-scale=1.0">
</head>
  
<body>
  <header>
    <a href="" id="logo" id="top">
      <h1>Assignment 5: Introduction to Server-Side Programming with PHP</h1>
      <h2 id="mid">Andy Nguyen</h2>
      <h2 id="right"><h2>
    </a>
  </header>

	<ul id="assignment2">
      <li>
        <h1 class="order-form"> Stock Portfolio Manager</h1>
        	<ul>
   				
   					<li><a href="addStock.php">Add</a></li>
   					<li><a href="modify.php">Modify</a></li>
   					<li><a href="deleteStock.php">Delete</a></li>
   					<li><a href="logout.php">Log out</a></li>
   					
      		</ul>
    </li>
  </ul>



  <footer>
    <p id="backtotop"> <a href="#top">Back to Top</a><p>
    <a href="Http://twitter.com/andyn92" target="_blank"><img src="../assign1/img/twitter-wrap.png" alt="Twitter Logo" class="social-icon"></a>
    <a href="http://facebook.com/andynguyen904" target="_blank"><img src="../assign1/img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
    <p>&copy; 2015 Andy Nguyen.</p>
  </footer>
</body>


</html>
