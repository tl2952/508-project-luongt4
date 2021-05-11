<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Delete Customer Form</title>
</head>
<body>
<h1>Deleting Customer</h1>
<form action="removeCustomer.php" method="post">
    <p>
    <li><a href="index.php">Go Back to Home</a></li>
        <label for="Customer_ID">Delete Customer by ID:</label>
        <input type="text" name="Customer_ID" id="CustomerID">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>