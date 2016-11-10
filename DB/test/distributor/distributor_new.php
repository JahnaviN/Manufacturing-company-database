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
//echo "connected successfully ";

$id=$_GET['id'];
$payment=0;
$sql="INSERT INTO SalesRecords (DistributorID,Payment) Values ($id,$payment)";
if($conn->query($sql) === True)
{
	        echo "new Order created";
		        echo "<br>";
}
else{
	        echo "error: ".$sql."<br>".$conn->error;
}
$q1="SELECT * FROM SalesRecords WHERE Payment=0 AND DistributorID=$id";
$result1=$conn->query($q1);
//echo $result1->num_rows;
$list1=$result1->fetch_assoc();
$no=$list1['OrderNo'];
//echo $no;
header("Location: distributor_order.php?no=".$no);
?>
