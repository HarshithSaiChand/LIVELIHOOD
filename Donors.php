<?php
    session_start();
    $server="localhost";
    $username="root";
    $password='';
    $dbname='login';

    $conn= mysqli_connect($server,$username,$password,$dbname);
    $sqls="SELECT UserName, Blood, Mobile FROM signup";

    $retval=mysqli_query($conn,$sqls);

    if(mysqli_num_rows($retval)>0)
    {
       while($row=mysqli_fetch_array($retval)){
        error_reporting(E_ALL ^ E_WARNING);
           echo  $row[0]."<br>". $row[1]."<br>".$row[2]."<br>".$row[3]."<br>".$row[4]."<br>".$row[5]."<br>".$row[6]."<br>".$row[7]."<br>".$row[8]."<br>".$row[9]
           ;
       }
       
    }
else{
    echo "Error";
}
mysqli_close($conn);

    ?>
