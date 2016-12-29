 <?php
include 'functions.php';
$username="n00804734";
$password="copn00804734";
$hostname="localhost";
$database="n00804734";
$conn= new mysqli($hostname,$username,$password);
$conn->select_db($database) or die ("Unable to select database");

    // create and execute query to get batch of records
    $query = "select * from Employee order by lastName";
    $result = mysqli_query($conn, $query);
?>
        <table>
        <tr><th>Last Name</th><th>First Name</th><th>Department</th><th>Phone Number</th><th>Email</th><th>Gender</th><th>Manager</th></tr>
        <?php
        //iterate over record set and print
        while($row = mysqli_fetch_row($result))
        {
                $row[0];
                $lName=$row[2];
                $fName=$row[1];
                $department=$row[3];
                $phone=$row[4];
                $email=$row[5];
                $gender=$row[6];
                $manager=$row[7];
                ?>
                <tr>
                
                <td><?php echo $lName;?></td>
                <td><?php echo $fName;?></td>
                <td><?php echo $department; ?></td>
                <td><?php echo format_phone($phone); ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo ucfirst(strtolower($gender));?></td>
                <td><?php echo $manager; ?></td>
                <td padding: 5px;><a href="edit.php?id=<?php echo $row[0];?>">Edit</a></td>
                <td padding: 5px;><a href="delete.php?id=<?php echo $row[0];?>" onclick="return confirm('Are you sure you want to delete this faculty?');">Delete</a></td>
                </tr>
     
        <?php 
        
        mysqli_close($conn); 

        }?>
        </table>
       

