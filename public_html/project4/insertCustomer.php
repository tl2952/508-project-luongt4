<?php

$link = mysqli_connect("3.238.242.230", "luongt4", "V00966217", "project_luongt4");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Escape user inputs for security
$ID = "SELECT MAX(Customer_ID) + 1 FROM Customer AS ID";
$First_Name = mysqli_real_escape_string($link, $_REQUEST['First_Name']);
$Last_Name = mysqli_real_escape_string($link, $_REQUEST['Last_Name']);
$Email = mysqli_real_escape_string($link, $_REQUEST['Email']);
$Phone = mysqli_real_escape_string($link, $_REQUEST['Phone_number']);
$Birth = mysqli_real_escape_string($link, $_REQUEST['Birthdate']);
$Serial = "SELECT Serial_Number FROM PC ORDER BY RAND() LIMIT 1 ";

// Attempt insert query execution
$sql = "INSERT INTO Customer (Customer_ID, First_Name, Last_Name, Email, Phone_number, Password, Birthdate, Serial_Number) VALUES 
(($ID), '$First_Name', '$Last_Name', '$Email','$Phone','yes', STR_TO_DATE('$Birth','%Y-%m-%d'), ($Serial))";
if(mysqli_query($link,$sql)){
    header("Location: index.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>