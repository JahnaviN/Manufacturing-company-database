<?php
$servername="localhost";
$username="root";
$password="iiit123";
$dbName="test";

$conn=mysql_connect($servername,$username,$password) or die("failed connecting to server : " . mysql_error() . "<br>");
$db=mysql_select_db($dbName,$conn) or die("failed connecting to database : " . mysql_error() . "<br>");
//echo "connected";
?>
