<?php
$servername="localhost";
$username="root";
$password="iiit123";
$db="test";

$conn = new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

$ssn=$_GET['ssn'];
$name=$_GET['name'];

$sql="DELETE FROM Dependents WHERE SSN=$ssn AND Name=$name";
if($conn->query($sql))
{
	header('Location: employee_profile.php?ssn='.$ssn);
}
else
{
	echo "error deleting row";
}
?>
