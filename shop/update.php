<?php
         $a=$_GET['t1'];
         $b=$_GET['t2'];
         $c=$_GET['t3'];
         $d=$_GET['t4'];
         $e=$_GET['t5'];
        
         $con=mysqli_connect('localhost','root','123456789','product','3306');
         $j="update info set name='$b',price='$c',quantity='$d',description='$e' where pid='$a'";
         $rs=mysqli_query($con,$j);
         if($rs)
         {
            echo"<br><h1>chlo bro update successfully...!!</h1>";
         }
         else
         {
            echo"whts that brother eoorroorr...!!";
         }
        
       



?>