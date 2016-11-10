<?php
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
echo "connected successfully <br>";

echo "Your order is created . Add items .";

$no=$_GET['no'];
$q1="SELECT * FROM Sale WHERE OrderNo=$no";
$result=$conn->query($q1);
echo "<table border=\"1\">";
echo "<tr><th>ItemCode</th><th>Quantity</th></tr>";
if($result->num_rows>0)
{
	while($list=$result->fetch_assoc())
	{
		echo "<tr><td>".$list['ItemCode']."</td>";
		echo "<td>".$list['Quantity']."</td>";
		echo "<td><a href='edit_item.php'>Edit</a></td></tr>";
	}
}
echo "</table>";
$form="<fieldset><legend>Add item</legend>";
$form.="<select name=\"order\" form=\"addItem\">";
$q2="SELECT ItemCode FROM Items";
$result2=$conn->query($q2);
if($result2->num_rows>0)
{
	while($list2=$result2->fetch_assoc())
	{
		$form.="<option value=\"".$list2['ItemCode']."\">".$list2['ItemCode']."</option>";
	}
	$form.="</select>";
}
$form.="<form action=\"record_order.php?no=$no\" method=\"POST\" id=\"addItem\">";
$form.="Quantity:<br><input type=\"number\" name=\"quantity\" >";
$form.="<br><br><input type=\"submit\" value=\"submit\"></form>";
echo $form;
?>
