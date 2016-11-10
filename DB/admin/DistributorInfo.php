<?php
$servername="localhost";
$username="root";
$password="iiit123";
$dbName="test";

$conn=mysql_connect($servername,$username,$password) or die("failed connecting to server : " . mysql_error() . "<br>");
$db=mysql_select_db($dbName,$conn) or die("failed connecting to database : " . mysql_error() . "<br>");
?>
<html>
<body>
<table border="1" style="width:60%; margin-left: 300px; position:absolute; margin-top:50px">
<tr>
<th>DistributorID</th>
<th>Name</th>
<th></th>
<th></th>
</tr>
<?php
$sql1=mysql_query("SELECT * FROM Distributor");
while($list=mysql_fetch_array($sql1))
{
        $drid=$list['DistributorID'];
        $x="<tr id=$drid><td>" . $list['DistributorID'] . "</td><td>" . $list['Name'] . "</td>";
        $x = $x . "<td><a href='delete_distributor.php?drid=" . $list['DistributorID'] . "'>Delete</a></td>";
        $x = $x . "<td><a href='view_distributor.php?drid=" . $list['DistributorID'] . "'>View</a></td>";
        echo $x;
}
?>
</table>
</body>
</html>
