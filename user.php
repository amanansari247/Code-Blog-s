<?php
require 'dbconnect.php';

$insert = false;
if($_SERVER['REQUEST_METHOD']=='POST'){
$tittle = $_POST['tittle'];
$description = $_POST['detail'];
$image = $_POST['image'];


$sqlinsert = "INSERT INTO `allblogs` (`tittle`, `description`, `image`) VALUES ('$tittle', '$description', '$image')";
 $ri = mysqli_query($con,$sqlinsert);
 if($ri){
    echo   "<div class='alert alert-Success alert-dismissible fade show myal' role='alert'>
    <strong>Account!</strong>Created.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
}
   
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="user.css">

</head>
<body>
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#">About</a>
  <a href="#">Your Blogs</a>
  <a href="index.php">Log Out</a>
  
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Code-Blog's</button>  
  <div class="content container mt-5" style="color: white;">
   
    <form  class="container col-md-5 col-md-offset-5 " method="post">
        <div class="mb-3  my-4">
          <label for="tittle" class="form-label">Title : </label>
          <input type="text" class="form-control tittle" id="tittle" aria-describedby="emailHelp" style ="width : 65%" name = "tittle"/>
          
        </div>
        <div class="form-floating" style ="width : 65%">
            
        <textarea class="form-control detail" placeholder="Project Details" id="detail" name="detail"></textarea>
        
      </div>
        <div  style ="width : 65%" class ="mb-3 my-4">
       
      </div>
      <input type="file" id="myFile" name="image">
      
        
        <button type="submit" class="btn btn-success">Publish</button>
      </form>
  </div>
</div>
    <script src="user.js"></script>
</body>
</html>