<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"krishna");
$query='select * from login';
$result=mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>username</th>
            
            <th>pass</th>
            
        </tr>
<?php
while($rows=mysqli_fetch_assoc($result))
{
    ?>
    <tr>
        <td><?php echo $rows['username']; ?></td>
        
        <td><?php echo $rows['passwords']; ?></td>
        
<?php    
}
?>


    </table>
</body>
</html>