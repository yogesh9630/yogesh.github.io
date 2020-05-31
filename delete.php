<!DOCTYPE html>
<html lang="en">
<head>
<link href="bootstrap-4.4.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   
</head>
<body>
    
</body>
</html>


<?php
include("connection.php");
session_start();

$id=$_GET['rn'];
$query="delete from todo where id='$id'";
$data=mysqli_query($con,$query);

if($data){
header("location: display1.php");

}else {
echo "<front color='red'>Delete process failed!!";
}
?>
