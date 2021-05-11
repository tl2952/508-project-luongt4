<?php

$link = mysqli_connect("3.238.242.230", "luongt4", "V00966217", "project_luongt4");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Escape user inputs for security
$ID = mysqli_real_escape_string($link, $_REQUEST['Customer_ID']);
 
// Attempt insert query execution
$sql = "Delete From Customer Where Customer_ID = $ID ";
if(mysqli_query($link,$sql)){
    header("Location: index.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>