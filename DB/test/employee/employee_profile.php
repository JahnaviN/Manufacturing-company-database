<html>
<?php 
//include('./connect.php');
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

?>
<head>
<title>Home</title>
</head>
<body>
<table border="1">
<tr>
<th>Name</th>
<th>Gender</th>
<th>Relation</th>
<th>Date of birth</th>
</tr>
<?php	
$ssn=$_GET['ssn'];
$sql="SELECT * FROM Dependents WHERE SSN=$ssn";

//echo $sql;
//$result=$conn->query($sql);
//echo $result->num_rows;

$result=mysqli_query($conn,$sql);
//echo mysqli_num_rows($result);
if(mysqli_num_rows($result)>0){
	while($list=$result->fetch_assoc())
	{
		$x="<tr><td>".$list['Name']."</td>";
		$x=$x."<td>".$list['Gender']."</td>";
		$x=$x."<td>".$list['Relation']."</td>";
		$x=$x."<td>".$list['DOB']."</td>";
		$x.="<td><a href=\"delete_dependents.php?ssn=$ssn&name='".$list['Name']."'\">Delete</a></td></tr>";
		echo $x;	
	}
}
?>
</table>
<input type="button" value="Add dependents" Onclick="parent.location='dependents.php?ssn=<?php echo $ssn; ?>'">
<table border="1">
<tr>
<th>Start_date</th>
<th>Purpose</th>
<th>Duration(No of days)</th>
</tr>

<?php
$ssn=$_GET['ssn'];
$sql="SELECT * FROM Holiday WHERE SSN=$ssn";

//echo $sql;
//$result=$conn->query($sql);
//echo $result->num_rows;

$result=mysqli_query($conn,$sql);
//echo mysqli_num_rows($result);
if(mysqli_num_rows($result)>0){
        while($list=$result->fetch_assoc())
        {
                $x="<tr><td>".$list['Start_date']."</td>";
                $x=$x."<td>".$list['Purpose']."</td>";
                $x=$x."<td>".$list['Duration']."</td></tr>";
                echo $x;
        }
}
?>
</table>
<input type="button" value="Apply for Leave" Onclick="parent.location='leave.php?ssn=<?php echo $ssn; ?>'">
</body>
</html>
