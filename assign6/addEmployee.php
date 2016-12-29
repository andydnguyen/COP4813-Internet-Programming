<?php
  $errorList = array();
  $fName = $_POST['firstname'];
  $lName = $_POST['lastname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $gender = $_POST['gender'];
  $department = $_POST['department'];
             

              if (strlen($fName) > 50 || strlen($lName) > 50)
              {
                
               $errorList[] = "The maximum field size is 50 characters.";
              } 
              if(!preg_match("/^[0-9]{10}$/i", $phone) ) 
              { 
          $errorList[] ="Please enter a valid phone number";
          
          }
          if(!preg_match("/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/i", $_POST['email']))
          {
             $errorList[]= "Please enter a valid email address";
            
          }
          if (isset($_POST['manager']))
            {
                $manager = "yes";
            } 
            else
            {
                $manager = "no";
              }       
if (sizeof($errorList)==0)
{
$insert = "INSERT INTO Employee(firstName, lastName, department, phone, email, gender, manager)";
$insert = $insert."values (?,?,?,?,?,?,?)";
$mysqli = new mysqli('localhost', 'n00804734','copn00804734', 'n00804734');
if(!$mysqli)
{
  echo "Unable to connect to the database";
  exit;
}
$q=$mysqli->prepare($insert);
        $q->bind_param('sssssss', $fName, $lName, $department, $phone, $email, $gender, $manager);
        $q->execute();

       
       
        $url = "index.php";
        header("Location: ".$url);
         $mysqli->close();
}
else
{
  for ($x=0; $x<sizeof($errorList); $x++)
{
  echo"<li>$errorList[$x]<br>";
  echo "<a href=javascript:history.back()>Go back</a>";
}
  }
?>
