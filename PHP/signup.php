<?php
	session_start();
	include('connect.php');
	if(isset($_POST['uname']) && ($_POST['pass']) && isset($_POST['address']) && isset($_POST['city']) && isset($_POST['postcode'])){
			
		$uname= $_POST['uname'];
		$pass= $_POST['pass'];
		$address= $_POST['address'];
		$city= $_POST['city'];
		$postcode= $_POST['postcode'];
			
		$query = "INSERT into `users` (`username`,`password`,`address`,`city`,`post_code`) VALUES ('$uname','$pass','$address','$city','postcode')";

		mysqli_query($conn, $query);
		header("Location: signup_login.php");

	}else{
		echo 'You havent filled all the boxes';
	}
	
