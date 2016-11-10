<?php
include("connect.php");
?>
<html>
<head>
<title>	Home </title>
<style>
th{
	text-align : left;
}
</style>
</head>
<body>
<h3>Welcome Admin !! </h3>
<table border="1" style="width:100%">
<tr>
<th>SSN</th>
<th>FName</th>
<th>MName</th>
<th>LName</th>
<th>Dept No</th>
<th></th>
<th></th>
</tr>
<?php
$sql1=mysql_query("SELECT SSN,FName,MName,LName,Dept_no FROM Employee");
while($list=mysql_fetch_array($sql1))
{
	$id=$list['SSN'];
	$x="<tr id=$id><td>" . $list['SSN'] . "</td><td>" . $list['FName'] . "</td><td>" . $list['MName'];
	$x = $x . "</td><td>" . $list['LName'] . "</td><td>" . $list['Dept_no'] . "</td>";
	$x = $x . "<td><a href='delete_employee.php?ssn=" . $list['SSN'] . "'>Delete</a></td>";
	$x = $x . "<td><a href='view_employee.php?ssn=" . $list['SSN'] . "'>View Details</a></td>";
	echo $x;
}
?>
</table>
<br>
<input type="button" onCLick="parent.location='employee.php'" value="add employee">
<br>
<h3>Click here to <a href="logout.php">LOGOUT</a></h3>
</body>
</html>
