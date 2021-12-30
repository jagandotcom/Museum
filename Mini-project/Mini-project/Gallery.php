<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
    <script src="app.js" ></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color: black;">
<div class="container-fluid p-0">
    
    <img id="img1"  src="./image/head1.jpg" class="img-fluid flex-fill img1" style="height: 800px;">
    <nav class="navbar navbar-expand-sm navbar-dark dark  h-25 ">
        
      <a class="navbar-brand" href="javascript:void(0)"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <a href="index.html" class="text-white" ><h4>Museum.org</h4></a>
        <ul class="navbar-nav me-auto p-3">
          <li class="nav-item">
            <a class="nav-link" href="ticket.html">Buy tickets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Galleries.html">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Event.html">Exhibition</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact us</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="text" placeholder="Search">
          <button class="btn btn-primary" type="button" onclick="">Search</button>
        </form>
     
    </div>
    </nav>
    <div id="target"></div>
  
    <div class="p-4 text-dark rounded card1 bg-white galleryDiv" style="margin-top: 500px;">
              <h2 class="text-dark ">GALLERY</h2><hr>  
   <?php
     $con = new mysqli("localhost","root","","museum");
     $sql  = "SELECT * FROM gallery ";
     $result = $con->query($sql);
     while($row=$result->fetch_assoc()){
        echo"<div class='row d-flex  justify-content-around'>";
            echo"<div class='col-12 d-flex flex-row justify-content-around'>";
                echo"    <img class='card-img-top'src='$row[src]' style='width:300px;background-color: black;'' alt='$row[alt] ' >;";
               
                echo"     <a href='#' onclick='changeimg(this)' class='btn btn-dark '>Know More</a> ";
                echo" </div> ";
           
                echo " </div>";
                echo" <br><hr> ";

      }
     $con->close();
    ?>
    </div>
</body>
</html>