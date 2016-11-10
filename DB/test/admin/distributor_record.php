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
//echo "connected successfully <br>";

//$ssn=$_POST['ssn'];
$name=$_POST['name'];
$zone=$_POST['zone'];
$location=$_POST['location'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$sql="INSERT INTO Distributor (Name,Zone,Location,Phone,EmailID)
VALUES ('$name','$zone','$location',$phone,'$email')";
if($conn->query($sql) === True){
//      echo "new record created successfully";
        header("Location: admin_profile.php");
}else{
        echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
