<?php

include 'connection.php';

$result = mysqli_query($conn,"Select menu_items, total_cost FROM Cafe");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Menu Order</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-4">
		<li><a href="cafe.php">Go Back to Cafe</a></li>
		<h1>Menu</h1>
		<?php

if (mysqli_num_rows($result) > 0) {
?>
  <table>

  <tr>
   
   <td>Product</td> 
   <td>Product Cost</td>   
  
  </tr>
<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
?>
<tr>
   
   <td><?php echo $row["menu_items"]; ?></td>
   <td><?php echo $row["total_cost"]; ?></td> 
   
     
</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
	echo "No result found";
}
?>

<ul>
		
			<form action="insertcart.php" method="post">
    <p>
        <label for="Product">Product:</label>
        <input type="text" name="Product" id="Product">
    </p>
    <p>
        <label for="Price">Price($):</label>
        <input type="number" name="Price" id="Price">
    </p>
    <input type="submit" value="Submit">
</form>
		</div>
		
		<div class="col-md-8">
			<table class="table table-bordered">
				<thead class="alert-info">
					<tr>
						<th>Product</th>
						<th>Price</th>
					</tr>
				</thead>
				<tbody>
					<?php
						require_once 'connection.php';
						$query = mysqli_query($conn, "SELECT * FROM Cart") or die(mysqli_error());
						while($fetch = mysqli_fetch_array($query)){
					?>
						<tr>
							<td><?php echo $fetch['Product']?></td>
							<td align="right"><?php echo number_format($fetch['Price'])?></td>
						</tr>
					<?php
						}
					?>
				</tbody>
				<?php include 'calculate.php'?>
				<?php include 'clear.php'?>>
			</table>
		</div>
	</div>
</body>	
</html>