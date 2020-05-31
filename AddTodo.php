



<!DOCTYPE html>
<html lang="en">
<head>

<link href="bootstrap-4.4.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    <title>Document</title>
</head>
<body>
<?php require_once "connection.php" ?>

<div class="form-group">

<div class="row mt-5">
<div class="col-md-4 offset-md-4">
<h1 class="text-center ">Add Todo</h1><br><br>


                 <form action="display1.php" method="post">
                     <div class="form-group">
    <label for="tittle">Todo Title</label>
   <input  required name="task" type="text" class="form-control" id="tittle" aria-describedby="emailHelp" placeholder="Enter  tittle" >
    </div> 
    
    
       <div class="form-group">
                      <label for="Date">DeadLine</label>
                      <input required name="creation_date" class="form-control" type="datetime-local"  id="date">
   
    </div>
      
  
                     <div class="container text-center">
                         <button class="btn btn-outline-success" name="submit" >Submit</button>

 <a class="btn btn-outline-warning" data-toggle="collapse" href="AddTodo.php" role="button" aria-expanded="false" aria-controls="collapseExample">
    Clear</a>

       


                                       </div>
                     
                 </form>
                 

    
</body>
</html>