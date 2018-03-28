<?php
	session_start();
	include('connect.php');
	if(isset($_POST['uname']) && isset($_POST['pass'])){
		if($_POST['uname'] !="" && $_POST['pass'] !="") {
			
			$uname = $_POST['uname'];
			$pass = $_POST['pass'];
			if ($uname == 'admin' && $pass == 'admin') {
				header("Location: admin.php");
			}
			$query = "SELECT * FROM `users` WHERE username='$uname' AND password='$pass' ";
			
			$sql = mysqli_query($conn, $query);

			if(!$row = mysqli_fetch_assoc($sql)){
				echo 'Your Username or password are incorrect!';
				echo '<p></p>';
				echo '<a href="signup_login.php">Go Back</a>';
			}else{
				$_SESSION['user_id'] = $row['user_id'];
				header("Location: mainpage.php");
			}			
		}else{
			echo 'You havent filled all the boxes';
			echo '<p></p>';
			echo '<a href="signup_login.php">Go Back</a>';
		}
	}else{
		echo 'You havent filled all the boxes';
		echo '<p></p>';
		echo '<a href="signup_login.php">Go Back</a>';
	}
?>