<?php echo file_get_contents("html/header.html"); ?>
<?php

include 'connection.php';

$result = mysqli_query($conn,"Select menu_items, total_cost FROM Cafe");
?>

<!DOCTYPE html>
<html>
<head>
<title>Cafe</title>
<link rel = "stylesheet" href="style.css">
</head>
<body>
<h1>Welcome to our Cafe!</h2>
<?php

if (mysqli_num_rows($result) > 0) {
	?>
  <table>

  <tr>
   
   <td>Product</td> 
   <td>Price</td>   
  
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
</body>

</html>
