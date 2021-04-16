<?php
require 'conn.php';
if(isset($_POST['btn']))
{
	$firstname=$_POST["firstname"];
	$lastname=$_POST["lastname"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$confirmpassword=$_POST["confirmpassword"];
	$query="insert into user(firstname,lastname,email,password.confirmpassword)values('$firstname','$lastname','$email','$password','$confirmpassword')";
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