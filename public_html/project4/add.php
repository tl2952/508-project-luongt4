<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<li><a href="cafe.php">Go Back to Cafe</a></li>
<form action="insert.php" method="post">
    <p>
        <label for="menu_item">Menu Item</label>
        <input type="text" name="menu_items" id="menuitem">
    </p>
    <p>
        <label for="total_cost">Cost</label>
        <input type="number" name="total_cost" id="totalcost">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>