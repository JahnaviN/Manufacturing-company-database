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
$no=$_GET['no'];
$item=$_POST['order'];
$quantity=$_POST['quantity'];

$q1="INSERT INTO Sale (OrderNo, ItemCode, Quantity) VALUES ($no,$item,$quantity)";
if($conn->query($q1) === True)
{
	echo "new order created";
	header('Location: order.php?no='.$no);
}
else{
	echo "error :".$q1."<br>".$conn->error;
}
?>
