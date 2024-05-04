<?php
  session_start();
  $pid=$_SESSION['x'];
  $u=$_SESSION['u'];
  $con=mysqli_connect('localhost','root','123456789','product','3306');
  $j="insert into cart values('$u','$pid')";
  $m="select * from info where pid='$pid'";
  $rs=mysqli_query($con,$j);
  if($rs)
  {
    echo"Added successfully..<a href='index.php'>Buy More</a>";
  }
  
?>