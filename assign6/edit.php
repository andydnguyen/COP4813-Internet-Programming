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
      <h1>Assignment 2: JavaScript Creating a Form</h1>
      <h2 id="mid">Andy Nguyen</h2>
      <h2 id="right">Return to ePortfolio<h2>
    </a>
  </header>



    <ul id="assignment2">
      <li>
      <div class="assignment2">
        <h1 class="order-form"> Update Faculty Information</h1>
<?php


if (!isset($_GET['id']))
{
    die('No record ID');
}

$id = $_GET['id'];
if(!is_numeric($id))
{
    die ('Not a number, abort.');
}
$mysqli = new mysqli('localhost', 'n00804734','copn00804734', 'n00804734');
if(!$mysqli)
{
    echo "Unable to connect to the database";
    exit;
}
$query = "Select * FROM Employee WHERE employeeID =" .  $id;
$result = mysqli_query($mysqli,$query);
    while($row = mysqli_fetch_row($result))
    {   
    $fName = $row[1];
    $lName = $row[2];
    $email = $row[5];
    $phone = $row[4];
    $gender = $row[6];
    $department = $row[3];
    $e_ID = $row[0];
?>


  <form id="form" name="form" method="post" action="updateEmployee.php">
        <div class="info">
        <label for="firstname">First Name</label>
        <br>
        <input type="text" name="firstname" id="fname" value="<?php echo $fName;?>"/>
        <br>
        <label for="lastname">Last Name</label>
        <br>
        <input type="text" name="lastname" id="lname" value="<?php echo $lName;?>"/>
        <br>
    </div>
    <div class="info">
        <label >Email</label>
        <br>
        <input type="text" name="email" id="email"  value="<?php echo $email;?>"/>
        <br>
        <label >Phone
        <span>(Example:  0123456789)</span>
        </label>
        <br>
        <input type="text" name="phone" id="phone" value="<?php echo $phone;?>"/>
    </div>
    <div class="info">
        <br>
        <label >Gender
        </label>
        <br>
        <input type="radio" name="gender" value="male" <?php if ($gender=='m') { echo 'checked'; } ?>/> Male
        <input type="radio" name="gender" value="female" <?php if ($gender=='f') { echo 'checked'; } ?>/>Female
        <br>
         <label>Is Faculty a Manager</label>
        <br>
        <input name="manager" value="YES" type="checkbox"/> Yes
    </div>
    <div class="info">
         <label>Department
        </label>
        <br>
              <select name="department"/>
                  <option value="<?php echo $department;?>"> <?php echo $department;?> </option>   
            <option>Computer Science</option>
            <option>Information Technology</option>
            <option>Information Science</option>
            <option>Information Systems</option>
              </select>
              <input type="hidden" name="e_ID" value="<?php echo $e_ID;?>"/>
              
          <center>
            <button type="submit">Update Faculty</button>
          </center>
          </form>
          <?php 
        
        mysqli_close($mysqli); 

        }?>

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