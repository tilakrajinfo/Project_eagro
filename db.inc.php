<?php
$server='localhost';									//database conection
$user='root';
$password='';
$dbname='eagro_db';
$con =mysql_connect($server,$user,$password);
mysql_select_db($dbname,$con);

?>
