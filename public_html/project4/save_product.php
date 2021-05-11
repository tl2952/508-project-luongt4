<?php
	require_once 'connection.php';
 
	if(ISSET($_POST['add'])){
		$product = $_POST['menu_items'];
		$price = $_POST['total_cost'];
 
		mysqli_query($conn, "INSERT INTO Cafe VALUES(17 , '$product', '$price', '234987')") or die(mysqli_error());
 
		header("location: order.php");
	}
?>