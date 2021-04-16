<?php
require 'conn.php';  
session_start();
if(isset($_REQUEST['btn']))
{
	
	$email=$_POST['email'];
	$password=$_POST['password'];
	$query="select *  from user  where email='$email' and password='$password'";
	$res=mysqli_query($conn,$query);
	$n=mysqli_num_rows($res);

	  if($n>0)
       {
       	  if($row=mysqli_fetch_array($res))
       	  {
       	  		$_SESSION['user'] = $row;
       	  
               
       	  	  
       	          header("location:dashboard.php");	   	
       	  	   
     
       	  }
       	  
       }
       else
       {
       	 
       	echo '<script>alert("Invalid UserName and Password")</script>';
       }
   }
?>


<!DOCTYPE html>
<html>
<head>
<title>loginpage</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">	
</head>
<body>
<form method="POST">
	<table align="center">
		<tr>
			<td>email</td>
			<td><input type="text" name="email" placeholder="Enter the email "></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type="password" name="password" placeholder="Enter the password"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="btn" value="login" ></td>
	</table>
</form>
</body>
</html>