<!DOCTYPE html>
<html lang="en">
<head><link href="bootstrap-4.4.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

</head>
<body>
    
</body>
</html>

<div class="container text-center">
<h1 class="text-center">TODOs</h1>
 </div><form action="AddTodo.php" method="get">
<div class="container text">
 <button class="btn btn-outline-success col-1g-1" name="Add Todo">Add Todo</button>                     
 </div>
  </form>


      <form action="index.php" method="get">
<div class="container text">
<br>
          <button class="btn btn-outline-success col-lg-1" name="Add Todo">Home</button>
             </div>                     
             </form>


<div class="col-md-6 offset-md-3">                     
<table class="table" >
<thead>
<tr>

<th>Dodo Title</th>
<th>DeadLine</th>
<th colspan="2">Action</th>

</tr>
</thead>







<?php
include("connection.php");
$query="select * from todo  ";
$data = mysqli_query($con,$query);
$total=mysqli_num_rows($data);


if($total !=0){
    


    

    while($result =mysqli_fetch_assoc($data)){
        
        echo "<tr>
        <td>".$result['task']."</td>
        <td>".$result['creation_date']."</td>
       <td> 
      
        <a  href='delete.php?rn=$result[id]'>Delete</a></td>

     
       </tr>";}
            
}


  else{  echo"<h1>Table has no Records!!</h1>";
   
}


?>

</table>
</div>