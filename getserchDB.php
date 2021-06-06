<?php
$q=$_GET["q"];

require 'connection.php';
$r = mysqli_query($con, "select * from properties  " ) ;
echo "<TABLE border=4>";
 while($row = mysqli_fetch_array($r) ) {
      echo "<TR><td>".$row['p-type']."</td>";
	  echo "<td>".$row['area']."</td>";
	  echo "<td>".$row['space']."</td>";
	  echo "<td>".$row['price']."</td>";
	  echo "<td>".$row['image']."</td>;</TR>";
	  
 }  	
echo"<TABLE>";
 mysqli_close($con);
 
 //where 'p-type' like'%q%' 
 
?>

