<?php
$servername="localhost";
$username="root";
$password="iiit123";
$db="test";

$conn = new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

//$ssn=$_POST['del'];

if($_GET['ssn']!=""){
	$ssn=$_GET['ssn'];
}
else{
	echo "invalid</br>";
}

$sql="DELETE FROM Employee WHERE SSN=$ssn";

if($conn->query($sql) === TRUE){
//	echo "Record deleted successfully";
	header("Location: admin_profile.php");
}
else{
	echo " error deleting row" . $conn->error;
}

$conn->close();
?>
