<?php
include('dbconnect/dbconnect.php');
include('header.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Dancing+Script" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		
		<div class="container">
			<h1 class="text-center ">Products</h1>
			<div class="row">
				<?PHP
				$con = mysqli_connect('localhost','root','','rentacar');
				mysqli_select_db($con,'rentacar');
				/*if($con){
					echo "connection successful";
				}else{
					echo "no connection";
				}*/
				$query = " SELECT * FROM `food`";
				$queryfire = mysqli_query($con, $query);
				$num = mysqli_num_rows($queryfire);
				if($num > 0){
					while($product = mysqli_fetch_array($queryfire)){
						$id = $product["car_id"];
				?>
				
				<div class="col-lg-4 col-md-4 col-12">
					
					
					<form>
						
						<div class="card" >
							<img class="card-img-top" src=" images/food/<?php echo $product['image'];  ?>" alt="car" >
							<div class="card-body">
								<h4 class="card-title "><?php echo
								$product['car_name'];  ?>  </h4>
								
								<h6> &#8377; <?php echo $product['cost'];  ?> </h6>
								<div > <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 90px;"> </h5></div>
								

								<a href="cart_add.php?id=<?php echo $product['car_id'];?>"  class="btn btn-primary" name="cardetails" id="">Add to Cart</a>
							</div>
						</div>
					</div>
				</form>
				
				<?php
				}
				}
				?>
			</div>
		</body>
	</html>