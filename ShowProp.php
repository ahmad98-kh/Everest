
<body style =" background-color: lightgreen">
<H1 align='center'> list of Property </H1>

<table border='1' width='50%'  align='center'>

<TR>
	<TH>Type of property </TH><TH>Property City</TH><TH>Images of property</TH>

</TR>
<?php
 require 'connection.php';



$query = "SELECT * FROM properties";

$result = mysqli_query($con,$query);

while( $row = mysqli_fetch_array($result) ) {
	
	echo "<tr align=center>";
	echo "<td>" . $row['p-type'] . "</td>";
	echo "<td>" . $row['area'] . "</td>";
	echo "<td>" . $row['image']. "</td>";
	//var_dump($row);

	echo "</tr>";
	
	
}

mysqli_close($con);
?> 

</table>
<body>
