<?php
        session_start();

        $username = $_POST['username'];
        $password = $_POST['password'];


        if($username == "Albert" && $password == "Ritzhaupt")
        {
                $_SESSION['username'] = $username;
                header("Location:admin.php");
        }else{
                
                header("Location:index.php?error=Incorrect Username or Password");
        }
?>
