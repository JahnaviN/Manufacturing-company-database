<html>
<head>
<title>home</title>
</head>
<body>
<?php
//include('../connect.php');
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


$id=$_GET['id'];
echo "Welcome !! ".$id;
$q="SELECT * FROM SalesRecords WHERE DistributorID=".$id;
$result=$conn->query($q);
echo "<table border=\"1\">";
echo "<tr><th>OrderNo</th><th>Date</th><th>Time</th><th>Payment</th></tr>";
while($list=$result->fetch_assoc())
{
	echo "<tr><td>".$list['OrderNo']."</td><td>".$list['Date']."</td><td>".$list['Time']."</td>";
	echo "<td>".$list['Payment']."</td></tr>";
}
echo "</table>";
?>
<input type="button" value="Add Order" Onclick="parent.location='distributor_new.php?id=<?php echo $_GET['id'];?>'">
</body>
</html>

