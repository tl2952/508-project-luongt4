<?php

$link = mysqli_connect("3.238.242.230", "luongt4", "V00966217", "project_luongt4");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Escape user inputs for security
$Product = mysqli_real_escape_string($link, $_REQUEST['Product']);
$Price = mysqli_real_escape_string($link, $_REQUEST['Price']);
 
// Attempt insert query execution
$sql = "INSERT INTO Cart (Product, Price) VALUES 
('$Product', '$Price')";
if(mysqli_query($link,$sql)){
    header("Location: order.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>