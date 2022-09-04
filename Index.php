<?php
     include('dbconnect.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="wow.js">
    <link rel="stylesheet" href="index.js">
    <link rel="stylesheet" href="style.css"> 
    <script src="https://kit.fontawesome.com/48ec3f5dc3.js" crossorigin="anonymous"></script>
</head>
  <body>
    <section>
    
    <header>

    <nav class="navbar navbar-expand-lg fixed-top navbar-scroll">
      <div class="container-fluid">
        <button
                class="navbar-toggler ps-0"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarExample01"
                aria-controls="navbarExample01"
                aria-expanded="false"
                aria-label="Toggle navigation"
                >
          <span
                class="navbar-toggler-icon d-flex justify-content-start align-items-center"
                >
            <i class="fas fa-bars"></i>
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
             <logo>  <a class="nav-link" aria-current="page" href="#intro">Code-Blog's</a></logo> 
            </li>
            </ul>
            <div class="button">
              <a href="login.php"><button class="btn1">Create Your First Blog</button></a>
              
            </div>
        </div>
        
        

      </div>
    </nav>
    </header>
  
   </section>
    <section  class="container part1 wow fadeInUp " data-wow-duration="1s">
  
    
    <div class="container2">
      <div class="typed-out maintext"> Everything You Need To code Is Here
        </div>
        <tp><br > ~ Code-Blog's</tp>
      
    </div>
    
    
    <img src="isometric-artificial-intelligence-brain.png" alt="" class="mainimage wow fadeInUp" data-wow-duration="1s">
 
  
</section>
  <section class="container part2">
    <div class="Blogs">
      <h2>Latest Blogs </h2>
      <div class="search">
        <form action="#">
          <input type="text" placeholder=" Search Blog's" name="search">
          <button>
            <i class="fa fa-search" style="font-size: 18px;">
            </i>
          </button>
        </form>
      </div>
    </div>
    <div class="blogs-row">
    <?php  
    
      
      $sql2 = "SELECT * FROM `allblogs`";
      $result2 =mysqli_query($con,$sql2);
      while( $row2 =mysqli_fetch_assoc($result2)){
        echo '<img  class ="comp"src="'.$row2['image'].'"/>';
        echo "<h3>".$row2['tittle']."</h3>";
      echo "<p>".$row2['description']."</p>";
      echo "<div class='conatainer-fluid'>
      <i class='icon fa-regular fa-heart'></i>
      <i class='icon fa-regular fa-comment'></i>
    </div>";
      }
      ?>
      
    </div>
    
    

      
   
  </section>
      

 
   
  </body>
</html>