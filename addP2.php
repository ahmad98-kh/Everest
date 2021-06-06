<html> 
 <head>
 <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
   <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="Acss/style.css" rel="stylesheet">

</head>
<body >

<?php
//session_start();
//echo "Welcome ".$_SESSION['fname']." ".$_SESSION['lname']." you can add";
?>
    <div class="title-box-d" class="container"  style="margin-top: 50px;margin-left: 70px">
      <h3 class="title-d">Add Property</h3>
	      
    </div>
	<div><A class="close-box-collapse right-boxed ion-ios-close" Href="index2.html"></A></div>

<div class="container">

<form action="addP.php" class="form-a" 
      method="post" accept-charset="utf8_bin"> 
<div class="row">

	   
 <div class="col-md-6 mb-2">
 <div class="form-group">
  <label for="Type">Type</label>	
  <select class="form-control form-control-lg form-control-a" id="Type" type="text" name="tr">
	   <option>Houce</option>
       <option>Land</option>
       <option>Store</option>
  </select>
  </div>
  </div>
   <div class="col-md-6 mb-2">
       <div class="form-group">
		<label for="city">Location</label>	
		<input  class="form-control form-control-lg form-control-a"  type="text" name="area">
		</div>
		</div>
		   <div class="col-md-6 mb-2">
       <div class="form-group">
		
  <label for="city">Area</label>
  <input  class="form-control form-control-lg form-control-a"  type="text" name="s">
  </div>
  </div>
     <div class="col-md-6 mb-2">
       <div class="form-group">
 <label for="city">Price</label>
 <input  class="form-control form-control-lg form-control-a"  type="text" name="pr">
  </div>
  </div>
     <div class="col-md-6 mb-2">
       <div class="form-group">
  <label for="city">Phone number</label>
  <input  class="form-control form-control-lg form-control-a"  type="text" name="phn">
  </div>
  </div>
  <div>
  <div>
  <form method="POST" action="" enctype="multipart/form-data">

      <input type="file" name="image" value=""/>
  </div>
  </div>
  
  <div class="col-md-12">
  <p> 	<input class="btn btn-b" type="submit" value="add" style="margin-left: 500px;">
  </div>

</div>
</form>
</div>

<?php
//session_start();
//echo "Welcome ".$_SESSION['fname']." ".$_SESSION['lname']." you can add";
	 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$var1=rand(1111,9999);
	$var2=rand (1111,9999);
	
	$var3=$var1.$var2;
	$var3=md5($var3);
	

	//$dst = "./all-images".$var1.$fnm;


	$tr = $_POST['tr'];
	$area=$_POST['area'];
	$s = $_POST['s'];
	$pr = $_POST['pr'];
	$phn=$_POST['phn'];
	$image= $var3;
	


	if (empty($tr)){
		
		echo "the real state is empty";
		
	}else if(empty($area)){
		echo "The area is Empty";
	}
	else if (empty($s)){
		
		echo "the Space is empty";
		
	}	else if (empty($pr)){
		
		echo "the price is empty";
		
	}else if (empty($phn)){
		echo "the Phone number is empty";
	}
	else{
		require 'connection.php';
		$query="INSERT INTO properties VALUES ('$tr', '$area','$s', $pr, $phn,'$image')";
		$result= mysqli_query($con,$query);
		if($result==1)
			echo "the $tr Real State is succesfuly added";
		else
			echo "This Real State  alreadye exits";
		mysqli_close($con);
	}
		
 
}
	 
?>

<br>
<div  class="container" >

<br>

</div>

  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

 </body> 
</html>
