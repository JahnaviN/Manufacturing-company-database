<?php
$servername="localhost";
$username="root";
$password="iiit123";
$db="test";

$conn=new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
	die("connection failed:" . $conn->connect_error);
}

echo "connected succesfully";
$ssn=$_GET['ssn'];

$attr=$_POST['attribute'];
$new=$_POST['new'];

$sql="UPDATE Employee SET $attr='$new' WHERE SSN=$ssn";
echo $sql;
if($conn->query($sql) === TRUE){
	echo "record updated";
	header("Location: view_employee.php?ssn=".$ssn);
}
else{
	echo "error updating " . $conn->error;
}
?>

