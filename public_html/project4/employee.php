<?php echo file_get_contents("html/header.html"); ?>
<?php

include 'connection.php';

$result = mysqli_query($conn,"Select First_Name, Last_Name, email FROM Employee");
?>

<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 <link rel = "stylesheet" href="style.css">
 </head>
<body>
<h1>Meet Our Employees</h1>

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

<ul>

<form action="function.php" method="post">
<select name="Employee_Type">
<option value = '0'>Select Employee Type</option>
<option value='Cafe'>Cafe Employees</option>
<option value='PC'>PC Floor Employees</option>
<option value='Manager'>Manager</option>
</select>
<button type= "submit" value ="type">Submit</button>
</form>
</ul>

 </body>
</html>
