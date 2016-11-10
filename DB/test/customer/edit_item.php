<?php
$servername="localhost";
$username="root";
$password="iiit123";
$db="test";

// Create connection 
$conn=new mysqli($servername,$username,$password,$db);
//Check Connection
if($conn->connect_error){
	die("connection failed: " . $conn->connect_error);
}
echo "connected successfully <br>";

?>
