<?php
include("../connect.php");
?>
<html>
<head>
<title>	Home </title>
<link rel="stylesheet" type="text/css" href="style-sign.css">
<style>
th{
	text-align : left;
}
ul{
	list-style-type:none;
	margin: 100px 225px;
	padding:0;
	overflow:hidden;
	background-color:#FF9999;
}
li{
	float: left;
}
a{
	display:block;
	width:210px;
}
</style>
</head>
<body style="background-image:url('http://bgfons.com/upload/wood%20_texture1757.jpg');background-attachment:fixed;background-repeat:no repeat;background-size:cover;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;">
<h4 style="margin-left:500px; margin-top:50px">Welcome Admin !! </h4>
<h4 style="position:absolute;margin-left:1200px"><a href="../logout.php">LOGOUT</a></h4>


<ul>
<li><a href="department.php" >ADD DEPARTMENT</a></li>
<li><a href="employee.php">ADD EMPLOYEE</a></li>
<li><a href="supplier.php">ADD SUPPLIER</a></li>
<li><a href="distributor.php">ADD DISTRIBUTOR</a></li>
</ul>

<ul>
<li><a href="DepartmentInfo.php">DEPARTMENT DETAILS</a></li>
<li><a href="EmployeeInfo.php">EMPLOYEE DETAILS</a></li>
<li><a href="SupplierInfo.php">SUPPLIER DETAILS</a></li>
<li><a href="DistributorInfo.php">DISTRIBUTOR DETAILS</a></li>
</ul>
<!--
<table border="1" style="width:60%; margin-left: 300px; position:absolute; margin-top:50px">
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
	$x = $x . "<td><a href='view_employee.php?ssn=" . $list['SSN'] . "'>View</a></td>";
	echo $x;
}
?>
</table>-->
<br>
<!--<input type="button" onCLick="parent.location='employee.php'" value="add employee">
<br>-->
</body>
</html>
