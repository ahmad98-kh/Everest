<?php
session_start();
	$error=''; 
	if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error="Username or Password empty";
	}else{
		$username=$_POST['username'];
		$password=$_POST['password'];			
		
		require 'connection.php';
		$q="select * from user where username='".$username."' 
		AND password='".$password."'";
		$p="select * from admin where username='".$username."' 
		AND password='".$password."'";
		$result=mysqli_query($con,$q);
		$result2=mysqli_query($con,$p);
		$rows=mysqli_num_rows($result);
		$rows2=mysqli_num_rows($result2);
		if ($rows == 1) { 
			
			$r =  mysqli_fetch_array($result);
			//$fn = $r['fname'];
			//$ln = $r['lname'];
				$_SESSION['fname']=$r['fname'];
				$_SESSION['lname']=$r['lname'];
				//print_r($_SESSION);
				$_SESSION['username']=$r['username'];
			header("location: serche.php?u=".$username."&fn=".$fn."&ln=".$ln); 
			
		} elseif($rows2==1){
			$r =  mysqli_fetch_array($result2);
			//$fn = $r['fname'];
			//$ln = $r['lname'];
			$_SESSION['fname']=$r['fname'];
			$_SESSION['lname']=$r['lname'];
			$_SESSION['username']=$r['username'];
			//print_r($_SESSION);
			
			header("location: real-add.php?u=".$username."&fn=".$fn."&ln=".$ln); 
			
		}
		else {
			$error = "Username or Password is invalid";
		}
		mysqli_close($con); 
	}
}
//$url='C:\xampp\htdocs\project-web\back.jpg';
?>
<?php echo "<body 
style='background: url(https://s-static.cinccdn.com/images/uploads/UPEE727FABE8DC4E.jpg);'>";
?>


