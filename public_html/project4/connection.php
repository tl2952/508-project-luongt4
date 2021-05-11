<?php

     $url='3.238.242.230';

     $username='luongt4';

     $password='V00966217';

     $dbname = "project_luongt4";

     $conn=mysqli_connect($url,$username,$password,"$dbname");

     if(!$conn){

	      die('Could not Connect My Sql:' .mysql_error());
             
     }

?>
