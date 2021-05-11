<?php echo file_get_contents("html/header.html"); ?>
<?php

include 'connection.php';

$result = mysqli_query($conn,"Select Customer_ID, First_Name, Last_Name, Email, Phone_number, Birthdate, Serial_Number FROM Customer");
?>

<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 <link rel = "stylesheet" href="style.css">
 </head>
<body>
<h2>Current Customers</h2>

<?php

if (mysqli_num_rows($result) > 0) {
?>
  <table>

  <tr>
   <td>Customer ID</td>
   <td>Name</td>
   <td>     </td> 
   <td>Email</td>
   <td>Phone_number</td>   
   <td>Birthdate</td> 
   <td>PC Serial Number</td>
  </tr>
<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
?>
<tr>
   <td><?php echo $row["Customer_ID"]; ?></td>  
   <td><?php echo $row["First_Name"]; ?></td>
   <td><?php echo $row["Last_Name"]; ?></td> 
   <td><?php echo $row["Email"]; ?></td>
   <td><?php echo $row["Phone_number"]; ?></td>
   <td><?php echo $row["Birthdate"]; ?></td> 
   <td><?php echo $row["Serial_Number"]; ?></td>
     
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
