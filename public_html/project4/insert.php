<?php

$link = mysqli_connect("3.238.242.230", "luongt4", "V00966217", "project_luongt4");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Escape user inputs for security
$menu_items = mysqli_real_escape_string($link, $_REQUEST['menu_items']);
$total_cost = mysqli_real_escape_string($link, $_REQUEST['total_cost']);
 
// Attempt insert query execution
$sql = "INSERT INTO Cafe (CafeID, menu_items, total_cost, Service_ID) VALUES 
(17, '$menu_items', '$total_cost', NULL)";
if(mysqli_query($link,$sql)){
    header("Location: cafe.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>