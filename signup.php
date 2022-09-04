<?php

require 'dbconnect.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
   $sql = "INSERT INTO `users` (`username`, `password`) VALUES ('$username', '$password'); ";
   $result =mysqli_query($con,$sql);
     
     if($result){
        echo   "<div class='alert alert-Success alert-dismissible fade show myal' role='alert'>
        <strong>Account!</strong>Created.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
     
     } 
     
     
      else{
        echo   "<div class='alert alert-Warning alert-dismissible fade show myal' role='alert'>
        <strong>Warning!</strong>Incorrect Credentials.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
      }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login/Signup</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   <link rel="stylesheet" href="signup.css">
  </head>
  <body>
    <div class="container mt-5 d-flex justify-content-center"     style="margin-top: 11rem!important;">
   
    <div class="signupform">
    <h1>Sign Up Now</h1>
    <p> It's free and only takes a minute</p>
    <form action="" method="post">
      <input type="text" class="input-box" placeholder="Your Name" name = "name">
      <input type="email" class="input-box" placeholder="Your Email" name = "username">
      <input type="password" class="input-box" placeholder="Your password" name="password">
      
      <br />
      <button type="submit" class="signupbtn">Sign Up</button>
      <a href="login.php"><button type="button" class="signupbtn">Back</button></a>
  </div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</div>
</html>