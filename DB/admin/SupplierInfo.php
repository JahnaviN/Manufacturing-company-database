<?php
include '../connect.php';
?>
<html>
<body>
<table border="1" style="width:60%; margin-left: 300px; position:absolute; margin-top:50px">
<tr>
<th>SupplierID</th>
<th>Name</th>
<th></th>
<th></th>
</tr>
<?php
$sql1=mysql_query("SELECT * FROM Supplier");
while($list=mysql_fetch_array($sql1))
{
        $sid=$list['SupplierID'];
        $x="<tr id=$sid><td>" . $list['SupplierID'] . "</td><td>" . $list['Name'] . "</td>";
        $x = $x . "<td><a href='delete_supplier.php?sid=" . $list['SupplierID'] . "'>Delete</a></td>";
        $x = $x . "<td><a href='view_supplier.php?sid=" . $list['SupplierID'] . "'>View</a></td>";
        echo $x;
}
?>
</table>
</body>
</html>
