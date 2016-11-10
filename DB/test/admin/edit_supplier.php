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
$sid=$_GET['sid'];

$attr=$_POST['attribute'];
$new=$_POST['new'];

$sql="UPDATE Supplier SET $attr='$new' WHERE SupplierID=$sid";
echo $sql;
if($conn->query($sql) === TRUE){
	echo "record updated";
	header("Location: SupplierInfo.php");
}
else{
	echo "error updating " . $conn->error;
}
?>

