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
	<a class="btn btn-info" href='admin.php'>Go Back</a>
	<form style="margin-top:20px;" method="post" action="insertPR.php" enctype="multipart/form-data">
		<input type="text" name="pname" placeholder="name" />
		<p></p>
		<input type="text" name="price" placeholder="price"/>
		<p></p>
		<input type="file" name="img_name"/>
		<p></p>
		<input  type="submit" name="submit" value="Send">
	</form>
</body>
</html>