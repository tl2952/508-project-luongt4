<?php echo file_get_contents("html/header.html"); ?>
<?php
include 'connection.php';
if(isset($_POST['Employee_Type'])) {

	employee_check(($_POST['Employee_Type']));

    }



    function employee_check($Employee_Type){
	switch ($Employee_Type) {
	     case "Cafe":
		     header("Location: cafe_employee.php");
			
		 break;

	     case "PC":

		 header("Location: PC_Floor_employee.php");
		 break;

	     case "Manager":

		   header("Location: manager_employee.php");

		 break;

	}

    }

    ?>
