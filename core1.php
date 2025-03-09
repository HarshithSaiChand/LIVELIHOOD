<?php
    session_start();
    $server="localhost";
    $username="root";
    $password='';
    $dbname='final1';

    $conn= mysqli_connect($server,$username,$password,$dbname);
    
   
    $user=$_POST['user'];
    $Mail=$_POST['Mail'];
    $password=$_POST['pa'];
    $Cpassword=$_POST['cp'];
    $Gen=$_POST['g'];
    $blood=$_POST['BG'];
    
    $query="select User_Name from signup where Email='$Mail' limit 1";
    $result1=mysqli_query($conn,$query);
    if(mysqli_num_rows($result1)==1)
    {
        echo "Email already exist";
    }
    else
    {
        if($password==$Cpassword)
        {
            $sqls="INSERT INTO signup(User_Name,Email,Gender,BG,Password) VALUES ('$user','$Mail','$Gen','$blood','$password')";
            $retval=mysqli_query($conn,$sqls);
            if($retval)
            {
                $_SESSION['uname']=$user;
                $_SESSION['Mail']=$Mail;
                $_SESSION['bg']=$blood;
                $_SESSION['gen']=$Gen;
                header("Location: acc1.php");
            }
            else
            {
                echo "Error";
            }
        }
        else
        {
            echo "Password Doesn't match";
        }
    }
    ?>