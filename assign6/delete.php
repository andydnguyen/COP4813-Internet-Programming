<?php
if (!isset($_GET['id']))
{
    die('No record ID');
}

$id = $_GET['id'];
if(!is_numeric($id))
{
    die ('No ID value');
}
$query = "DELETE FROM Employee WHERE employeeID = ?";
$mysqli = new mysqli('localhost', 'n00804734','copn00804734', 'n00804734');
if(!$mysqli)
{
    echo "Unable to connect to the database";
    exit;
}
$q=$mysqli->prepare($query);
        $q->bind_param('i', $id);
        $q->execute();
        $url = "index.php";
        header("Location: ".$url);
         $mysqli->close();
?>
