<?php echo file_get_contents("html/header.html"); ?>
<?php
include 'connection.php';

$result = mysqli_query($conn,"Select First_Name, Last_Name, email FROM Employee WHERE FloorEmployee_ID IS NOT NULL");
?>

<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 <link rel = "stylesheet" href="style.css">
 </head>
<body>
<h1>Meet Our PC Floor Employees</h2>

<?php

if (mysqli_num_rows($result) > 0) {
?>
  <table>

  <tr>
   
   <td>Name      </td>
   <td>          </td> 
   <td>Email</td>   
  
  </tr>
<?php
		$i=0;
			while($row = mysqli_fetch_array($result)) {
?>
<tr>
   
   <td><?php echo $row["First_Name"]; ?></td>
   <td><?php echo $row["Last_Name"]; ?></td> 
   <td><?php echo $row["email"]; ?></td>
     
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
