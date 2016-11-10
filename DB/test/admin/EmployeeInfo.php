<?php
include '../connect.php';
?>
<html>
<head>
<title>Employee Details</title>
</head>
<body>
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
</body>
</html>
