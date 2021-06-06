<html>
<head>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link href="Signup.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>register</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<style>

body{
    background-color: #525252;
}
.centered-form{
	margin-top: 60px
}

.centered-form .panel{
	background: rgba(255, 255, 255, 0.8);
	box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}

</style>
</head>
<body  style="background-color: white; margin-top:150px ">

 <div class="row centered-form">
  <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">

	        		<div class="panel-heading">
			    		<h3 class="panel-title">Please sign up for Bootsnipp <small>It's free!</small></h3>
			 			</div>
		<div class="panel-body">
<form  method=post>

<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6" >
<div class="form-group">
  <input  name="fname" type="text" class="form-control" placeholder="First Name" aria-label="Username" aria-describedby="basic-addon1">
  </div>
</div>

<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
  <input  name="lname" type="text" class="form-control" placeholder="Last Name" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>

</div>
<div class="form-group">
  <input name="username" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="form-group">
  <input  name="phonenumber" type="text" class="form-control" placeholder="Phone number" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
  <input name="password" type="text" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
  <input name="pass2"  type="text" class="form-control" placeholder="Re-Enter Password" aria-label="Username" aria-describedby="basic-addon1">
</div>

</div>
</div>
</div>
<div class="container">
<input id="registrationbtn" type="submit" name="submit" value="Register"   class="btn btn-info btn-block" >
</div>
<div ><A style="size: 30px;" Href="index.html">Logout</A></div>
</form>

</div>

</div>

</div>









</body>
</html>

<?php
 if (isset($_POST['submit'])) {
	//if($_POST['uname'] && $_POST["pass1"] && $_POST["pass2"]  ){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$username = $_POST['username'];
	$phonenumber=$_POST['phonenumber'];
	$password=$_POST['password'];	
	$pass2=$_POST['pass2'];	
	
	
	if (empty($username)){ 
		echo "empty user name<BR>";
	}
	if (empty($password)){
		echo "empty password<BR>";
	} if (empty($pass2)){
		echo "empty pass2<BR>";		
	}else if ( (!empty($username) || !empty($password) || !empty($pass2))){
		
		if($password!=$pass2){
			echo "passwords doesnt match";
		}else{
			require "connection.php";
					
			$q="insert into user values('$fname','$lname','$username','$phonenumber','$password')";
			$result=mysqli_query($con,$q) ;		
			print "<h1>you have registered sucessfully</h1>";
			print "<h1><a href='loginn.php'i> >>>>>LOGIN<<<<< </a></h1>";
		   
			
		}
		
		
		
	}
}


?>
