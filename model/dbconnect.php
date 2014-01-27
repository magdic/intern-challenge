<?php
$mysql_hostname = "localhost:8889";
$mysql_user = "root";
$mysql_password = "root";
$mysql_database = "db_intern_challenge";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
@mysql_query("SET NAMES 'utf8'"); 
?>
