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
		$rows=mysqli_num_rows($result);
		if ($rows == 1) { 
			
			$r =  mysqli_fetch_array($result);

				$_SESSION['fname']=$r['fname'];
				$_SESSION['lname']=$r['lname'];
				$_SESSION['username']=$r['username'];
			header("location: index2.html?u=".$username."&fn=".$fn."&ln=".$ln); 
			
		}
		else {
			$error = "Username or Password is invalid";
		}
		mysqli_close($con); 
	}
}

?>

<html>
<head>
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="ahmadcss/style.css">

	</head>
<title>Please Enter your Username and Password </title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body class="img js-fullheight" style="background-image: url(http://www.wallpapersin4k.org/wp-content/uploads/2017/04/Real-Estate-Wallpaper-Backgrounds-2.jpg);">

	<section class="ftco-section">
			<div class="container" >
			<div><a href="index.html" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Home page</a></div>
					<div class="row justify-content-center">
						<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section" style="font-size: 50px;">Welcom To Everest</h2>
						</div>
			</div>
			
			<div class="row justify-content-center">
			<div class="col-md-6 col-lg-4">
			<div class="login-wrap p-0">
			<div class="login-wrap p-0">
			<h3 class="mb-4 text-center">Have an account?</h3>


<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

<div class="form-group">
<input id="name" name="username" placeholder="enter_username" type="text" class="form-control">
</div>
<div class="form-group">
<input id="password-field" name="password" placeholder="**********" type="password" class="form-control">
<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
</div>
<div class="form-group">
<input name="submit" type="submit" value=" Login "  class="form-control btn btn-primary submit px-3">
</div>
<span><?php echo $error; ?></span>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div>
</form>

	          <div class="social d-flex text-center">
	          	<a href="https://www.facebook.com/" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="Signup.php" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Create Acc</a>
	          </div>
			  
	</div>
	</div>
	</div>
	</div>
	</div>
	</section>

	<script src="login-form-20/js/jquery.min.js"></script>
  <script src="login-form-20/js/popper.js"></script>
  <script src="login-form-20/js/bootstrap.min.js"></script>
  <script src="/login-form-20js/main.js"></script>
</body>
</html>

