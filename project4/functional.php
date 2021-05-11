<?php echo file_get_contents("html/header.html"); ?>
<?php
include 'connection.php';
if(isset($_POST['Menu_Function'])) {
	Menu_Function(($_POST['Menu_Function']));

}

function Menu_Function($Menu_Type){
	switch ($Menu_Type) {
	case "Add":
		header("Location: add.php");
		break;

	case "Delete":
		header("Location: delete.php");
		break;
	}

}

?>
