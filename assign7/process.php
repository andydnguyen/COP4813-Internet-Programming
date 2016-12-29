<?php
include 'functions.php';
        error_reporting(E_ALL ^ E_NOTICE);
        $username="n00804734";
        $password="copn00804734";
        $hostname="localhost";
        $database="n00804734";
        
                
        $department=$_GET['departValue'];
        

        $conn= new mysqli($hostname,$username,$password);
        $conn->select_db($database) or die ("Unable to select database");
        if($department == "All"){
                $query = "select * from Employee order by lastName";
        }
        else{

        $query = "select * from Employee where department like '" . $department . "' order by LastName";
        }
      
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
                </tr>
                <?php
        }

        mysqli_close($conn); ?>
        </table>

