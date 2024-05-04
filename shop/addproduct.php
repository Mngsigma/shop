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
                <a class="nav-link" href="logout.html">Logout</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Admin.php">Admin Home</a>
              </li>
          </ul>
        </div>
      
      </nav>
</div>
<div class="col-md-2">
    
</div>
<div class="col-md-8">
<form method='POST' enctype="multipart/form-data">
Pid: <br><input type="text"  name="t1" style="width: 45%; " name="id" class="form-control"> <br>
Pname: <br><input type="text" name="t2" style="width: 45%; " name="id" class="form-control"> <br>
Price: <br><input type="text" name="t3" style="width: 45%; " name="id" class="form-control"> <br>
Quantity: <br><input type="text" name="t4"style="width: 45%; " name="id" class="form-control"> <br>
Description: <br><input type="text" name="t5" style="width: 45%; " name="id" class="form-control"> <br>
Photo: <br> <input type="file" src=""  name="file" alt=""> <br>
 <br> <br><input type="submit" value="Submit" class="btn btn-success">
</form>
<?php
    if(isset($_POST['t1'])==true)
    {
      $a=$_POST['t1'];
      $b=$_POST['t2'];
      $c=$_POST['t3'];
      $d=$_POST['t4'];
      $e=$_POST['t5'];
      $t=$_FILES['file']['tmp_name'];
        $n=$_FILES['file']['name'];
        if(move_uploaded_file($t,$n))
        {

      $con=mysqli_connect('localhost','root','123456789','product','3306');
      $j="insert into info values('$a','$b','$c','$d','$e','$n')";
      $rs=mysqli_query($con,$j);
      if($rs)
      {
         echo"<br><h1>Item Added  successfully...!!</h1>";
      }
      else
      {
         echo"whts that brother eoorroorr...!!";
      }

    }
}


?>
</div>
<div class="col-md-2">
    
</div>




</body>
</html>

