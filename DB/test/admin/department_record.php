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

$deptno=$_POST['DepartmentNo'];
$name=$_POST['Name'];
$emp=$_POST['NoofEmployees'];
$manager=$_POST['mngr'];
$sql="INSERT INTO Department (DepartmentNo,Name,NoofEmployees,ManagerSSN )
VALUES ($deptno,'$name',$emp,$manager)";
if($conn->query($sql) === True){
		//echo "new record created successfully";
		header("Location: admin_profile.php");
}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
