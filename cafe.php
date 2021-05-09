<?php  

  include_once 'connection.php';

  $result = mysqli_query($conn,"SELECT menu_items, total_cost FROM Cafe");

?>

<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 <link rel = "stylesheet" href="style.css">
 </head>
<body>
<?php

if (mysqli_num_rows($result) > 0) {
?>
  <table>

  <tr>
   
   <td>menu_items</td>
   <td>total_cost</td>
   
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
