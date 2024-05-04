<?php
         $a=$_GET['id'];
         $con=mysqli_connect('localhost','root','123456789','product','3306');
         $j="delete from info where pid='$a'";
         $rs=mysqli_query($con,$j);
         if($rs)
         {
            echo"<br><h1>chlo bro delete kr diya...!!</h1>";
         }
         else
         {
            echo"whts that brother eoorroorr...!!";
         }

       



?>