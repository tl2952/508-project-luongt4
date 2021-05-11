<?php echo file_get_contents("html/header.html"); ?>
<?php
include 'connection.php';
if(isset($_POST['Customer_Function'])) {
	Customer_Function(($_POST['Customer_Function']));

}

function Customer_Function($Customer_Type){
	switch ($Customer_Type) {
	case "View":
	    header("Location: viewCustomer.php");
	    break;
	    
	case "Add":
		header("Location: addCustomer.php");
		break;

	case "Delete":
		header("Location: deleteCustomer.php");
		break;
	}

}

?>
