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
	<title>Admin Panel</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<a class="btn btn-info" href="insertP.php">ADD</a>
	<a class="btn btn-info" href="checkO.php">Check orders</a>
	<p></p>
	<a class="btn btn-info" href="logout.php">Log out</a>
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
								<form method="post" action="">
									<button type="submit" name="update" class="btn btn-info" style="margin-top:5px;">Edit</button>
								</form>
								<form>
									<button type="submit" name="delete" class="btn btn-info" style="margin-top:5px;">delete</button>
								</form>
							</div>
					</div>
					<?php				
				}
			}
		?>
	</div>
</body>
</html>