<?php
session_start();
$con=mysqli_connect("localhost","root","","final1");


    $N=$_POST['name'];
    $B=$_POST['BG'];
    $M=$_POST['Mob'];
    $C=$_POST['Cname'];
    

    
        $query="INSERT INTO donor(Name,BG,Mob,Cname) VALUES('$N','$B','$M','$C')";
        $query_run=mysqli_query($con,$query);
        if($query_run)
        {
            echo "Insert Successful";
            header("Location: acc1.php");
        }
        else
        {
            $_SESSION['status']="Insert Unsuccessful";
            header("Location: signup.php");   
        }
    



?>