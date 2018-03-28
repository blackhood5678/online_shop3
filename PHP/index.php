<?php
	session_start();
	include('connect.php');
	$result = $conn->query("
		SELECT *
		FROM products
	");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Online Shop</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script>
		function myFunction() {
		    alert("First you need to log in or sign up!");
		}
	</script>
</head>
<body>
	<a class="btn btn-info" href="signup_login.php">Sign up/Log in</a>
	<div class="container">
		<?php
			if (mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_assoc($result)){
					?>
					<div class="col-sm-4 col-md-3"> 
							<div class="products">
								<img class="img-responsive" src="../pic/<?php echo $row['pic']; ?>"/>
								<h4 class="text-info"><?php echo $row['name']; ?></h4>
								<h4><?php echo $row['price']; ?>лв</h4>
								<input type="text" name="quantity" class="form-control" value="1" />
								<button class="btn btn-info" style="margin-top:5px;" onclick="myFunction()">Add to cart</button>
							</div>
					</div>
					<?php				
				}
			}
		?>
	</div>
</body>
</html>