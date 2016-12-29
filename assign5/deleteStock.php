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
  if(isset($_POST['submit'])) {
    $stock = strtoupper($_POST['stock']);
    
    $myFile = "stockPortfolio.csv";
    $owned = bought($stock);
    if($owned[0]) {
        $ownedStocks = getStocks();
        $newStocks = "";
        $pattern = "/^" . $stock . "/";
        foreach ($ownedStocks as $entry) {
            
            if (!preg_match($pattern, $entry)) {
                $newStocks = $newStocks . $entry;
            }
        }
        file_put_contents($myFile, $newStocks);
                header("Location:admin.php?status=Stock deleted from portfolio");
    }
    else {        
        header("Location:admin.php?error=You do not own $stock");
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
        <h1 class="order-form"> Delete a Stock, <?php echo ucfirst($username);?></h1>
<form action=""method="post">
        <input name="stock" type="text" placeholder="Ticker Symbol">Stock to Delete</input><br>
        <button class="btn"type="submit" name="submit">Delete</button>
        <a  name="cancel" class="btn" href="admin.php">Cancel</a>
</form>
</div>
</div>
<div class="assignment2">
<h2 id="heading">Current Positions</h2>
<?php include 'positions.php'; 
?>
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
