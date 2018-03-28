<?php
	session_start();
	include('connect.php');
	if(isset($_POST['submit'])){

		$name = $_POST["pname"];
		$price = $_POST['price'];
		$pic =$_FILES['img_name']['name'];
		if($name =="" || $pic =="" || $price ==""){
			echo '<p>You havent filled all the fields</p>';
			echo "<a href='insertP.php'>Go Back</a>";
		}else{
			$query = "INSERT INTO `products` (`name`,`price`,`pic`) VALUE ('$name','$price','$pic')";
			mysqli_query($conn,$query) or die (mysqli_error($conn));
			header('Location: insertP.php');
		}
	}	
?>