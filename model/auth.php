<?php
/*
*En esta authenticacion se da los permisos
*para acceder a ingresar*
*/
	//Se inicializa la sesion
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
		header("location: ../index.php");
		exit();
	}
?>