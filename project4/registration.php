<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8"/>

    <title>Registration</title>

    <link rel="stylesheet" href="styles.css"/>

</head>

<body>

<?php

require('connection.php');

// When form submitted, insert values into the database.

if (isset($_REQUEST['Email'])) {

	//escapes special characters in a string
	$First_Name = stripslashes($_REQUEST['First_Name']);

	$First_Name    = mysqli_real_escape_string($con, $First_Name);

	$Last_Name    = stripslashes($_REQUEST['Last_Name']);

	$Last_Name    = mysqli_real_escape_string($con, $Last_Name);

	$Email    = stripslashes($_REQUEST['Email']);

	$Email    = mysqli_real_escape_string($con, $Email);

	$Password = stripslashes($_REQUEST['Password']);

	$Password = mysqli_real_escape_string($con, $Password);

	$query    = "INSERT into `Customer` (Customer_ID, First_Name,Last_Name, Email, Phone_number, Password, Birthdate, Serial_Number)
		VALUES (5,'$First_name','$Last_name', '$Email',' ','" . md5($password) . "', ' ', ' ')";

	$result   = mysqli_query($con, $query);

	if ($result) {                                                                                                                                      echo "<div class='form'>

		<h3>You are registered successfully.</h3><br/>

		<p class='link'>Click here to <a href='Login.php'>Login</a></p>

		</div>";

	} else {

		echo "<div class='form'>
			<h3>Required fields are missing.</h3><br/>

			<p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>

			</div>";

	}

} else {

?>

																																			  <form class="form" action="" method="post">
																																				  <h1 class="login-title">Registration</h1>
																																					  <input type="text" class="login-input" name="First_Name" placeholder="First Name" required />
																																						  <input type="text" class="login-input" name="Last_Name" placeholder="Last Name">

<input type="text" class="login-input" name="Email" placeholder="Email Address">
																																							  <input type="password" class="login-input" name="Password" placeholder="Password">																																								  <input type="submit" name="submit" value="Register" class="login-button">

																																									  <p class="link"><a href="Login.php">Click to Login</a></p>

																																									      </form>

<?php

}

?>

																																										  </body>
																																									      </html>

