<?php 



$hostname = "localhost";
$username ="root";
$password ="";
$db_name ="todoapp";
$con=mysqli_connect($hostname,$username,$password,$db_name);

if(!$con){
    die("Error in connection <br>".mysqli_error($con));
}
else{
    if(isset($_POST['submit'])){
        $task=$_POST['task'];
        $date=$_POST['creation_date'];

        $query="insert into todo (task,creation_date) values('$task','$date') ";
        $query= mysqli_query($con,$query);

        if(!$query){
            echo "Sorry your  tittle could not be created <br>".mysqli_error($con);
        }
        else{
            echo "";
        }
    }
}

?>