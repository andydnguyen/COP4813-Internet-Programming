<?php
  $errorList = array();
  $e_ID =  $_POST['e_ID'];
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
                $manager = "YES";
            } 
            else
            {
                $manager = "NO";
              }       
if (sizeof($errorList)==0)
{
$updateEmployee = "UPDATE Employee set firstName=?, lastName=?, department=?, phone=?, email=?, gender=?, manager=? where ";
$updateEmployee = $updateEmployee. "employeeID=?";
$connect = new mysqli('localhost', 'n00804734','copn00804734', 'n00804734');
if(!$connect)
{
  echo "Unable to connect to the database";
  exit;
}
  $q=$connect->prepare($updateEmployee);
    $q->bind_param('sssssssi', $fName, $lName, $department, $phone, $email, $gender, $manager, $e_ID);
    $q->execute();

       
       
        $url = "index.php";
        header("Location: ".$url);
        $connect->close();
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
