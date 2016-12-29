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
      <h1>Assignment 5: Introduction to Server-Side Programming with PHP</h1>
      <h2 id="mid">Andy Nguyen</h2>
      <h2 id="right">Return to ePortfolio<h2>
    </a>
  </header>

        <ul id="assignment2">
      <li>
      <div class="assignment2">
        <h1 class="order-form"> Stock Portfolio Manager Login</h1>
        <form class="form-horizontal" method="post" action="checkLogin.php">
             <div>
                   <label class="control-label" for="username">Username</label>
                   <div class="controls">
                     <input type="text" name="username" id="username">
                   </div>
             </div>
             <div>
                   <label class="control-label" for="password">Password</label>
                   <div class="controls">
                     <input type="password" name="password" id="password" >
                   </div>
             </div>
                   <div class="controls">
                     <button type="submit" class="btn">Sign In</button>
                   </div>
              </form>
                </div>
    </li>
	<?php if(isset($error)) {?>
          <p><?php echo $error;?></p>
          <?php } elseif (isset($status)) { ?>
          <p><?php echo $status;?></p>
          <?php }?>
  </ul>  

  <footer>
    <p id="backtotop"> <a href="#top">Back to Top</a><p>
    <a href="Http://twitter.com/andyn92" target="_blank"><img src="../assign1/img/twitter-wrap.png" alt="Twitter Logo" class="social-icon"></a>
    <a href="http://facebook.com/andynguyen904" target="_blank"><img src="../assign1/img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
    <p>&copy; 2015 Andy Nguyen.</p>
  </footer>
</body>


</html>
