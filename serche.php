<html>
<head>
<?php
session_start();

//$_SESSION['fname'];
//$_SESSION['lname'];

echo "Welcome ".$_SESSION['fname']." ".$_SESSION['lname']." you can sershe";

?>
<script>
function showHint(str)
{
	if (str.length==0)	{ 
		document.getElementById("txtHint").innerHTML="";
		return;
	}
	xmlhttp=new XMLHttpRequest();	
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200)   {
			document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","getserchDB.php?q="+str,true);
	xmlhttp.send();
}
</script>
</head>
<body>

<p><b>Serche Real estates:</b></p>
<form> 
Serche: <input type="text" onkeyup="showHint(this.value)">
</form>
<HR color=red>
<p>Suggestions: <div id="txtHint">
the result will be shown here</div></p>
<HR color=red>
<br>
<b id="logout"><a href="index.html">Log Out</a></b>
</body>
<br>
<A Href="changpass.php"> Updat my data and my password</A>
</html>