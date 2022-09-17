<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="images/Logo.png">
	<link rel="stylesheet" type="text/css" href="http://localhost/Super-Code/PHP/FirstpagePHP/main/main.css" />
	<script src="https://kit.fontawesome.com/c002b551d9.js" crossorigin="anonymous"></script>
<title>Signing up</title>
<style>
	.color{
		color:azure;
	}
</style>
	<?php
	include('db.php');
	if (isset($_POST['registerBtn'])) {
		$fullname = $_POST['fullname'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$username1 = $_POST['username'];
		$password1 = $_POST['password'];
		if ($username1 == '' || $password1 == '') {
			
			echo '<p style="text-align: center;" class="color"> Please enter your full information </p>';
		} else {
			execsql("INSERT INTO customer (fullname, phone, email, username, password) 
			VALUE ('$fullname', '$phone', '$email', '$username1', '$password1')");
			echo '<p style="text-align: center;color:green">Sign up successfully</p>';
		}
	}
	?>
</head>

<body class="signup">

	<form action="signup.php" class="signup" method="POST" ">
	    <legend>Sign Up</legend>
	    	<table>
	    		<tr>
	    			<td><i class=" fa-solid fa-circle-user"></i>Fullname</td>
		<td><input type=" text" name="fullname" size="30">
		</td>
		</tr>
		<tr>
			<td><i class="fa-solid fa-phone-arrow-down-left"></i>Phone</td>
			<td><input type="text" name="phone" size="30"></td>
		</tr>
		<tr>
			<td><i class="fa-solid fa-envelope-dot"></i>Email</td>
			<td><input type="text" name="email" size="30"></td>
		</tr>
		<tr>
			<td><i class="fa-solid fa-user-alien"></i>Username</td>
			<td><input type="text" name="username" size="30"></td>
		</tr>
		<tr>
			<td ><i class="fa-solid fa-lock"></i>Password</td>
			<td><input type="password" name="password" size="30"></td>
		</tr>
		<tr>
			<td>
				<button type="submit" class="btn" name="registerBtn">Signup</button>
					
			</td>
		</tr>
		</table>
	</form>

</body>

</html>