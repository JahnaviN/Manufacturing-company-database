<?php
//include('connect.php');

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

$ssn=$_GET['ssn'];

$nameErr=$genderErr=$relationErr=$dobErr="";
$name=$gender=$relation=$dob="";

function test_input($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}

$name=test_input($_POST['name']);
$gender=test_input($_POST['gender']);
$relation=test_input($_POST['relation']);
$dob=test_input($_POST['dob']);

$query="INSERT INTO Dependents (SSN,Name,Gender,Relation,DOB) VALUES ($ssn,'$name','$gender','$relation','$dob')";

if($conn->query($query) === True)
{
//	echo "new record created ";
	header('Location: employee_profile.php?ssn='.$ssn);
}
else{
	echo "Error: " . $query . "<br>" . $conn->error;
}
?>
