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

$ssn=$_POST['ssn'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$date=$_POST['dob'];
$joindate=$_POST['joindate'];
$qualification=$_POST['qualification'];
$experience=$_POST['experience'];
$supssn=$_POST['supssn'];
$salary=$_POST['salary'];
$deptno=$_POST['deptno'];
$age=$_POST['age'];
$gender=$_POST['gender'];

$sql="INSERT INTO Employee (SSN,FName,MName,LName,DOB,JoinDate,Qualification,Experience,SUPSSN,Salary,Dept_no,age,Gender)
VALUES ($ssn,'$fname','$mname','$lname','$date','$joindate','$qualification','$experience','$supssn',$salary,$deptno,$age,'$gender')";
if($conn->query($sql) === True){
	echo "new record created successfully";
//	header("Location: admin_profile.php");
}else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
