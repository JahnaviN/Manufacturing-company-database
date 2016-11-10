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
<th>DistributorID</th>
<th>OrderNo</th>
<th>Date</th>
<th>Time</th>
<th>Payment</th>
<th></th>
<th></th>
</tr>
<?php
$sql1=mysql_query("SELECT * FROM SalesRecords");
while($list=mysql_fetch_array($sql1))
{
        $drid=$list['DistributorID'];
        $x="<tr id=$id><td>" . $list['DistributorID'] . "</td><td>" . $list['OrderNo'] . "</td><td>" . $list['Date'];
        $x = $x . "</td><td>" . $list['Time'] . "</td><td>" . $list['Payment'] . "</td>";
	$x = $x . "<td><a href='view_order.php?OrderNo=" . $list['OrderNo'] . "'>View</a></td>";
        echo $x;
}
?>
</body>
</html>
