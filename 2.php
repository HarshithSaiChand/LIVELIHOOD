 <?php
    session_start();
    $server="localhost";
    $username="root";
    $password='';
    $dbname='final1';

    $conn= mysqli_connect($server,$username,$password,$dbname);
    
   
    
    if(isset($_POST['Mail']))
    {
        $u=$_POST['Mail'];
        $p=$_POST['pass'];
        $query="select User_Name from signup where Email='$u' AND Password='$p' limit 1";
        $gender="select Gender from signup where Email='$u' AND Password='$p' limit 1";
        $BG="select BG from signup where Email='$u' AND Password='$p' limit 1";
        
     
        $result1=mysqli_query($conn,$query);
        if(mysqli_num_rows($result1)==1)
        {
            $result2=mysqli_query($conn,$gender);
            $result3=mysqli_query($conn,$BG);
            

            $A=mysqli_fetch_assoc($result1);
            $B=mysqli_fetch_assoc($result2);
            $C=mysqli_fetch_assoc($result3);
            
            $_SESSION['uname']=implode(", ", $A);
            $_SESSION['gen']=implode(", ", $B);
            $_SESSION['bg']=implode(", ", $C);
            
            $_SESSION['Mail']=$u;
           
            header("Location:acc1.php");
        }
    }
mysqli_close($conn);

    ?>
;