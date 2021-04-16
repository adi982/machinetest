
<?php
require 'conn.php';
session_start();
if(empty($_SESSION) || !isset($_SESSION['user']) || empty($_SESSION['user'])){
	header("location:login.php");
}
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>dashboard Page</title>
</head>
<body>
	<a href="logout.php">Logout</a><br>
<table border="1" cellpadding="10" cellspacing="0">
	
	<tr>
		<td>Id</td>
		<td>
			<?php echo $user['id'] ?>
		</td>
	</tr>

	<tr>
		<td>firstname</td>
		<td>
			<?php echo $user['firstname'] ?>
		</td>
	</tr>

	<tr>
		<td>lastname</td>
		<td><?php  echo $user['lastname']?></td>
	</tr>

	<tr>
		<td>email</td>
		<td><?php  echo $user ['email']?></td>
	</tr>

	<tr>
		<td>password</td>
		<td><?php  echo $user['password']?></td>
	</tr>
	<tr>
		<td>confirmpassword</td>
		<td><?php echo $user['confirmpassword'];?></td>
	</tr>
	
</table>
</body>
</html>