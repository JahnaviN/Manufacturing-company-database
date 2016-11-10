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
<th>OrderNo</th>
<th>ItemCode</th>
<th>Quantity</th>
<th></th>
</tr>
<?php
$OrderNo=$_GET['OrderNo'];
$sql1=mysql_query("SELECT * FROM DistributorOrder WHERE OrderNo=$OrderNo");
while($list=mysql_fetch_array($sql1))
{
        $OrderNo=$list['OrderNo'];
        $x="<tr id=$id><td>" . $list['OrderNo'] . "</td><td>" . $list['ItemCode'] . "</td><td>" . $list['Quantity'];
        #$x = $x . "</td><td>" . $list['Time'] . "</td><td>" . $list['Payment'] . "</td>";
	#$x = $x . "<td><a href='view_order.php?OrderNo=" . $list['OrderNo'] . "'>View</a></td>";
        echo $x;
}
?>
</body>
</html>
