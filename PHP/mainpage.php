<?php
	session_start();
	include('connect.php');
	$query = 'SELECT * FROM products ORDER by id ASC';
    $result = mysqli_query($conn, $query);
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
	<a class="btn btn-info" href="checkout.php">Checkout</a>
	<p></p>
	<a class="btn btn-info" href="logout.php">logout</a>
	<div class="container">
		<?php
		if ($result){
			if (mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_assoc($result)){
					?>
					<div class="col-sm-4 col-md-3">	
						<form method="post" action="cart.php?action=add&id=<?php echo $row['id']; ?>"> 
							<div class="products">
								<img class="img-responsive" src="../pic/<?php echo $row['pic']; ?>"/>
								<h4 class="text-info"><?php echo $row['name']; ?></h4>
								<h4><?php echo $row['price']; ?>лв</h4>
								<input type="text" name="quantity" class="form-control" value="1" />
                            	<input type="hidden" name="name" value="<?php echo $row['name']; ?>" />
                            	<input type="hidden" name="price" value="<?php echo $row['price']; ?>" />
                            	<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-info"
                                   value="Add to Cart" />
							</div>
						</form>
					</div>
					<?php				
				}
			}
		}
		?>
	</div>
</body>
</html>