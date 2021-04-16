<!DOCTYPE html>
<html>
<head>
<title>Index Page</title>
<script type="text/javascript" >
function validation()
{
	 var email,password,confirmpassword;
	 var email = document.getElementById('email').value;

	 if(email.length=="")
	 {
	 	document.getElementById('message').innerHTML="Enter the Email id";
	 	return false;
	 }
	 var password = document.getElementById('password').value;
	  var confirmpassword = document.getElementById('confirmpassword').value;
	  if(password != confirmpassword)
	  {
	  	alert('password not match');
	  	return false;
	  }

}
function clearall(x)
{
	x.innerHTML="";
}
	
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
 <form method="POST">
 <label>firstname</label>
 <label><input type="text" name="firstname" placeholder="Enter the firstname"></label><br>
  <label>lastname</label>
 <label><input type="text" name="lastname" placeholder="Enter the lastname"></label><br>
  <label>email</label>
 <label><input type="text" name="email" placeholder="Enter the email" id="email" onkeyup="clearall('message')">
<span id="message" style="color: red"></span>
 </label><br>
  <label>password</label>
 <label><input type="password" name="password" placeholder="Enter the password" id="password"></label><br>
  <label>confirmpassword</label>
 <label><input type="password" name="confirmpassword" placeholder="Enter the confirmpassword" id="confirmpassword"></label><br>
 <input type="submit" name="btn" value="signup" class="btn btn-success" onclick="  return validation()">
 </form>
</body>
</html>
<?php
require 'conn.php';
session_start();
if(isset($_POST['btn']))
{
	$firstname=$_POST["firstname"];
	$lastname=$_POST["lastname"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$confirmpassword=$_POST["confirmpassword"];
	$query="insert into user(firstname,lastname,email,password,confirmpassword)values('$firstname','$lastname','$email','$password','$confirmpassword')";
	mysqli_query($conn,$query);
	$n=mysqli_affected_rows($conn);
	if($n)
	{
		echo "<h1>Insert data in database</h1>";
	}
	else
	{
		echo "<h1>Data Not Insert database</h1>";
	}
}


?>