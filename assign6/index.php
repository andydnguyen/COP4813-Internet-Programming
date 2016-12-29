<?php

  error_reporting(0);
  $error = $_GET['error'];
  $status = $_GET['status'];
 
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
    <a href="../index.html" id="logo" id="top">
      <h1>Assignment 6: Integrating Server-Side Programming with PHP and MySQL</h1>
      <h2 id="mid">Andy Nguyen</h2>
      <h2 id="right">Return to ePortfolio<h2>
    </a>
  </header>



    <ul id="assignment2">
      <li>
      <div class="assignment2">
        <h1 class="order-form"> Faculty Staff</h1>
        <h2><a href ="erd.jpg" target="_blank">Click to view entity-relationship diagram (ERD)</a></h2>
       <?php include 'add.php';
   if(isset($error)) { ?>
                <p style="color:red;font-weight:700;">
                        <?php echo $error;?>
                </p>
                <?php
                } elseif (isset($status)) { ?>
                <p><?php echo $status; ?></p>
                <?php
                  }
                ?>

      </div>
    </li>

     <li>
      <div class="assignment2">
        <br>
        <?php include 'config.php'; ?>

      </div>
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