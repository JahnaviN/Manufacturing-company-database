<html>
<head>
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<title>view all</title>
<style>
th{
	text-align: left;
};
table{
top:500px;
left:100px;
}
</style>
</head>
<body>
<?php
//include('connect.php');
$servername="localhost";
$username="root";
$password="iiit123";
$db="test";

$conn=new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
	die("connection failed " . $conn->connect_error);
}
//echo "connected successfully";
$ssn=$_GET['ssn'];
//echo $ssn;
$sql="SELECT * FROM Employee WHERE SSN=$ssn";
$result=$conn->query($sql);
//echo $result->num_rows;
$list=$result->fetch_assoc();
/*$sql=mysql_query("SELECT * FROM Employee WHERE SSN=$ssn");
while($list=mysql_fetch_array($sql))
{
	echo "list <br>";
	echo "employee ssn :  " . $list['SSN'];
}*/
//$list=mysql_fetch_array($sql);
//$sql="SELECT * FROM Employee WHERE SSN=$ssn";
//$result=$conn->query($sql);
//echo $result->num_rows;

echo "<table border=\"1\" style=\"width:100%\">";
echo "<tr><td>SSN</td><td>" . $list['SSN'] . "</td></tr>";
echo "<tr><td>First Name</td><td>".$list['FName']."</td></tr>";
echo "<tr><td>Middle Name</td><td>".$list['MName']."</td></tr>";
echo "<tr><td>Last Name</td><td>".$list['LName']."</td></tr>";
echo "<tr><td>Date of birth</td><td>".$list['DOB']."</td></tr>";
echo "<tr><td>Join Date</td><td>".$list['JoinDate']."</td></tr>";
echo "<tr><td>Qualification</td><td>".$list['Qualification']."</td></tr>";
echo "<tr><td>Experience</td><td>".$list['Experience']."</td></tr>";
echo "<tr><td>SUPSSN</td><td>".$list['SUPSSN']."</td></tr>";
echo "<tr><td>Salary</td><td>".$list['Salary']."</td></tr>";
echo "<tr><td>Department no</td><td>".$list['Dept_no']."</td></tr>";
echo "<tr><td>Age</td><td>".$list['age']."</td></tr>";
echo "<tr><td>Gender</td><td>".$list['Gender']."</td></tr>";
echo "</table>";

echo "<fieldset style=\"width:30%\"><legend>Edit</legend>";
echo "<form action=\"edit_employee.php?ssn=$ssn\" method=\"POST\">";
echo "Enter Field to be edited : <br>";
echo "<input type=\"text\" name=\"attribute\" required><br>";
echo "Enter new value : <br>";
echo "<input type=\"text\" name=\"new\" required>";
echo "<br><input type=\"submit\" value=\"submit\">";
echo "</form>";
echo "</fieldset>";

echo "<input type=\"button\" id=\"button1\" value=\"collapse\" onClick=\"parent.location='admin_profile.php'\">";
echo "</body>";
echo "</html>";
?>
