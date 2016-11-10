<?php
include '../connect.php';
?>
<html>
<body>
<table border="1" style="width:60%; margin-left: 300px; position:absolute; margin-top:50px">
<tr>
<th>DepartmentNo</th>
<th>Name</th>
<th>NoofEmployees</th>
<th>ManagerSSN</th>
<th></th>
<th></th>
</tr>
<?php
$sql1=mysql_query("SELECT * FROM Department");
while($list=mysql_fetch_array($sql1))
{
        $id=$list['DepartmentNo'];
        $x="<tr id=$id><td>".$list['DepartmentNo']."</td><td>" . $list['Name'] . "</td><td>" . $list['NoofEmployees'] . "</td><td>" . $list['ManagerSSN'] . "</td>";
        $x = $x . "<td><a href='delete_department.php?DNo=" . $list['DepartmentNo'] . "'>Delete</a></td>";
        $x = $x . "<td><a href='edit_department.php?DNo=" . $list['DepartmentNo'] . "'>View</a></td>";
        echo $x;
}
?>
</table>
</body>
</html>
