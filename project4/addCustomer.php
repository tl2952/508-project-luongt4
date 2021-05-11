<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Customer</title>
</head>
<body>
<form action="insertCustomer.php" method="post">
     <li><a href="index.php">Go Back to Home</a></li>
     <h1>Adding Customer</h1>
    <p>
        <label for="First_Name">First Name</label>
        <input type="text" name="First_Name" id="firstname">
    </p>
    <p>
        <label for="Last_Name">Last Name</label>
        <input type="text" name="Last_Name" id="lastname">
    </p>
    <p>
        <label for="Email">Email</label>
        <input type="text" name="Email" id="email">
    </p>
     <p>
        <label for="Phone_number">Phone number</label>
        <input type="text" name="Phone_number" id="phonenumber">
    </p>
         <p>
        <label for="Birthdate">Birthdate</label>
        <input type="date" name="Birthdate" id="birthdate">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>