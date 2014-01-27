<?php 
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="chupatalk, el diccionario tico, palabras costarricense, diccionario costarricense" />
<link rel="icon" type="img/ico" href="img/favicon.ico" />
<title>Intern Challenge - App </title>
<link rel="stylesheet" href="css/style.css" />
</head>

<body>

<div id="idlogin">
    <p>Mantenanince Site </p>
  <p>Solo para administrador de la Página. Gracias por su comprensión!!! </p>
<form action="login.php" method="post" style="margin-bottom:none;">
	<span style="margin-right: 11px; margin-top: 20px;">Usuario: <input type="text" id="campo" name="username" style="width: 165px; margin-left: 15px; margin-top: 20px;border: 3px double #CCCCCC; padding:5px 10px;"/></span><br>
	<span style="margin-right: 11px; margin-top: 20px;">Password: <input type="password" id="campo" name="password" style="width: 165px; margin-left: 15px; margin-top: 20px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br><br>
	<input type="submit" id="submit" class="medium gray button" value="Aceptar" style="height: 34px; margin-left: 15px; width: 191px; padding: 5px; border: 3px double rgb(204, 204, 204);" />
	</form>
</div>

<div class="pie"><a href="#">Politica de Privacidad | Aviso Legal</a></div>
</body>
</html>

<!--DEFAULT_WELCOME_PAGE-->