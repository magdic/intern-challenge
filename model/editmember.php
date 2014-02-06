<?php
include('dbconnect.php'); //Please make sure that the path is correct

//Function to sanitize values received from the form. Prevents SQL injection
function clean($str)
	{
		$str = @trim($str);
		if(get_magic_quotes_gpc())
			{
			$str = stripslashes($str);
			}
		return mysql_real_escape_string($str);
	}
  
//Sanitize the POST values
$idmember = clean($_POST['idmember']);
$mbphone = clean($_POST['mbphone']);
$mbasistencia= clean($_POST['mbasistencia']);
$mbverses= clean($_POST['mbverses']);


mysql_query("UPDATE member SET mbphone='$mbphone', mbasistencia='$mbasistencia', mbverses='$mbverses' WHERE idmember='$idmember'");
header("location: ../results");
  
?>