<?php
//require_once('auth.php');
include('dbconnect.php');
//Array to store validation errors
$errmsg_arr = array();
if (!isset($_SESSION)) {
session_start();

}


 
//Validacion de bandera de error
$errflag = false;
//Funcion para recibir valores del form. Previene SQL injection
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
$mbname = clean($_POST['mbname']);
$mbsurname = clean($_POST['mbsurname']);
$mbemail = clean($_POST['mbemail']);
$mbphone = clean($_POST['mbphone']);
$mbdate = clean($_POST['mbdate']);

$resultf = mysql_query("SELECT * FROM member where mbname='$mbname' AND mbsurname='$mbsurname' AND mbemail='$mbemail' AND mbphone='$mbphone'AND mbdate='$mbdate'");
while($rowf = mysql_fetch_array($resultf))
	{
	$cccvvv=$rowf['mbname'];
	if ($cccvvv!=''){
	//Login failed
	$errmsg_arr[] = 'User Allready Added';
	$errflag = true;
	if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	//header("location: login_ok.php");
	echo "Error";
	exit();
	}
	}
	}
mysql_query("INSERT INTO member (mbname, mbsurname, mbemail, mbphone, mbdate)
VALUES ('$mbname','$mbsurname','$mbemail','$mbphone','$mbdate')");
header("location: ../app");
?>