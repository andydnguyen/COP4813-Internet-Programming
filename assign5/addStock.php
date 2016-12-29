<?php
  session_start();
  error_reporting(0);
  $error = $_GET['error'];
  include 'validate.php';
  //User tried to access without loggin in.
  $username = $_SESSION['username'];
  if($username == "")
  {
    header("Location:index.php?error=Please login first.");
  }
  
  if(isset($_POST['submit'])) 
  {
    $stock = strtoupper($_POST['stock']);
    $shares = $_POST['shares'];
    
    $myFile = "stockPortfolio.csv";
    $fh = fopen($myFile, 'a') or die("can't access file");
    $owned = bought($stock);
    if(!$owned[0] && valid($stock)) 
  {
        if(isset($stock) && floatval($shares)> 0) 
    {
          $dateTime = date("M-d-y H:i:s");
          $entry = $stock . "," . $shares . "," . $dateTime . "\r\n";
          fwrite($fh, $entry);
      header("Location:admin.php?status=Stock added");
        }
                
        else 
    {
           header("Location:admin.php?status=No shares selected");
        }
    }
    else 
  {
        header("Location:admin.php?error=$stock is not a valid symbol or you already own it");
    }
   }?>

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
    <a  id="logo" id="top">
      <h1>Assignment 5: Introduction to Server-Side Programming with PHP</h1>
      <h2 id="mid">Andy Nguyen</h2>
      <h2 id="right"><h2>
    </a>
  </header>

	<ul id="assignment2">
      <li>
        <h1 class="order-form"> Add a Stock, <?php echo ucfirst($username);?></h1>
  <div>
  <form action=""method="post">
        <input name="stock" type="text" placeholder="Ticker Symbol">Stock Ticker</input><br>
        <input name="shares" type="text"placeholder="Number of Shares">Number of Shares</input><br>
        <button class="btn"type="submit" name="submit">Submit</button>
        <a  name="cancel" class="btn" href="admin.php">Cancel</a>
  </form>
</div>
</div>
<div class="assignment2">
<h2>Current Positions</h2>
<?php include 'positions.php'; ?>

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
