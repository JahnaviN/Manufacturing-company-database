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
$drid=$_GET['drid'];

$attr=$_POST['attribute'];
$new=$_POST['new'];

$sql="UPDATE Distributor SET $attr='$new' WHERE DistributorID=$drid";
if($conn->query($sql) === TRUE){
	echo "record updated";
	header("Location: SupplierInfo.php");
}
else{
	echo "error updating " . $conn->error;
}
?>

