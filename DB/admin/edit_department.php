<?php
$servername="localhost";
$username="root";
$password="iiit123";
$db="test";

$conn=new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
	die("connection failed:" . $conn->connect_error);
}

//echo "connected succesfully";
$DNo=$_GET['DNo'];
echo $DNo;
$attr=$_POST['attribute'];
$new=$_POST['new'];

$sql="UPDATE Department SET $attr='$new' WHERE DepartmentNo=$DNo";
echo $sql;
if($conn->query($sql) === TRUE){
	echo "record updated";
	header("Location: DepartmentInfo.php");
}
else{
	echo "error updating " . $conn->error;
}
?>

