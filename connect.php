<?php
$hostname = "localhost";
$username = "root"; //username for database
$password = "";  //password for database
$dbname = "sos";  //database name

$connect = mysql_connect($hostname,$username,$password) or die("Error Connecting");  //make connection
mysql_select_db($dbname);  //select database
?>