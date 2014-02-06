<?php
include('dbconnect.php');

$id=$_POST['id'];

mysql_query("DELETE FROM member WHERE idmember='$id'") or die(mysql_error());



?>