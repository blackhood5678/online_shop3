<?php
	session_start();
	include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Online Shop</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<a class="btn btn-info" href="index.php">Go Back</a>
	<h3 style="margin-top:5px;">Log in</h3>
	<form method="post" action="login.php">
		<input type="text" name="uname" placeholder="Username"/>
		<input type="password" name="pass" placeholder="Password"/>
		<input type="submit" name="submit" value="Log In"/>
	</form>
	<h3>Sign up</h3>
	<form method="post" action="signup.php">
		<input type="text" name="uname" placeholder="Username"/>
		<p></p>
		<input type="password" name="pass" placeholder="Password"/>
		<p></p>
		<input type="text" name="address" placeholder="Address"/>
		<p></p>
		<input type="text" name="city" placeholder="City"/>
		<p></p>
		<input type="text" name="postcode" placeholder="Post Code"/>
		<p></p>
		<input type="submit" name="submit" value="Sign Up"/>
	</form>
</body>
</html>