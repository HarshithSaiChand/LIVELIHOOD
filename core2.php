<?php
session_start();
$con=mysqli_connect("localhost","root","","final1");


    $N=$_POST['name'];
    $B=$_POST['BG'];
    $M=$_POST['Mob'];
    $C=$_POST['Cname'];
    

    
    $query="SELECT name,BG,Mob,Cname from donor where BG='$B' AND Cname='$C' ";
    $query1="SELECT name,BG,Mob,Cname from donor where BG='$B' AND Cname!='$C' ";
        
    $query_run=mysqli_query($con,$query);
    $query_run1=mysqli_query($con,$query1);

    echo " In your village/city:";
    echo '<br>';
    while($A=mysqli_fetch_assoc($query_run))
    {
        $Sa=implode(", ", $A);
        echo $Sa;
        echo '<br>';
    }
    echo " All the requested blood group people:";
    echo '<br>';
    while($B=mysqli_fetch_assoc($query_run1))
    {
        $Sb=implode(", ", $B);
        echo $Sb;
        echo '<br>';
    }
?>