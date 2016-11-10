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

$ssn=$_GET['ssn'];

$startdateErr=$purposeErr=$durationErr="";
$startdate=$purpose=$duration="";

function test_input($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
}

$startdate=test_input($_POST['startdate']);
$purpose=test_input($_POST['purpose']);
$duration=test_input($_POST['duration']);

$query="INSERT INTO Holiday (SSN,Start_date,Purpose,Duration) VALUES ($ssn,'$startdate','$purpose',$duration)";
echo '$query';
if($conn->query($query) === True)
{
//	echo "Hello";
//      echo "new record created ";
        header('Location: employee_profile.php?ssn='.$ssn);
}
else{
        echo "Error: " . $query . "<br>" . $conn->error;
}
?>
