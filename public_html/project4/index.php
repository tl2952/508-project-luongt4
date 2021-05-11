<?php echo file_get_contents("html/header.html"); ?>
<html>
	<body>
<h1>Welcome To POG Cafe!</h1>
<ul>
<form action="functioncustomer.php" method="post">
<select name="Customer_Function">
<option value = '0'>Customer Options</option>
<option value = 'View'> View</option>
<option value='Add'>Add</option>
<option value='Delete'>Delete</option>
</select>
<button type= "submit" value ="type">Submit</button>
</form>
</ul>

</body>
</html>



