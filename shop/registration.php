<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="image_downloader_1711798944850.jpg" alt="Los Angeles" style="height: 300px;" class="d-block w-100">
 

</div>
  <div class="carousel-item">
    <img src="image_downloader_1711798901696.jpg" alt="Chicago" style="height: 300px;" class="d-block w-100">
  </div>
  <div class="carousel-item">
    <img src="image_downloader_1711798922054.jpg" alt="New York" style="height: 300px;" class="d-block w-100">
  </div>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>

<div class="row">

<div class="col-md-12">

    <nav class="navbar navbar-expand-sm bg-light">

        <div class="container-fluid">
          <!-- Links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="addproduct.php">Add Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registration.php">Registration</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="editproduct.php">Edit Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Admin.php">Admin Home</a>
              </li>
          </ul>
        </div>
      
      </nav>
</div>
<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-8">
    <form method="POST" >
    id: <br><input type="text" name="id" style="width: 45%; " name="id" class="form-control"> <br>
    name: <br><input type="text" name="name" style="width: 45%; " name="id" class="form-control"> <br>
    password: <br><input type="text" name="password" style="width: 45%; " name="id" class="form-control"> <br> <br>
    <input type="submit" value="create account" class="btn btn-success">
</form>
<?php
       if(isset($_POST['id'])==true)
       {
         $a=$_POST['id'];
         $b=$_POST['name'];
         $c=$_POST['password'];

         $con=mysqli_connect('localhost','root','123456789','task11','3306');
         $j="insert into register values('$a','$b','$c')";
         $rs=mysqli_query($con,$j);
         if($rs)
         {
            echo"<br>chlo bro entry successfully...!!";
         }
         else
         {
            echo"whts that brother eoorroorr...!!";
         }

       }



?>        
    </div>
    <div class="col-md-2">
        
    </div>

</div>
</body>
</html>