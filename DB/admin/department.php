<html>
<head>
<title>Department Info</title>
<head>
<body>
<fieldset><legend>Enter Details</legend>
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
//echo "connected successfully <br>";
$form="<fieldset><legend>Add Department</legend>";
//$form.="<select name=\"Department\" form=\"adddepartment\">";
$form.="<form action=\"department_record.php\" method=\"POST\" id=\"addmanager\">";
//$form.="DepartmentNo:<br><input type=\"number\" name=\"DepartmentNo\" required>";
$form.="<br>Name:<br><input type=\"text\" name=\"Name\" required>";
$form.="<br>NoofEmployees<br><input type=\"number\" name=\"NoofEmployees\" required>";

$form.="<br>ManagerSSN<br><select name=\"mngr\" form=\"addmanager\">";
$q2="SELECT SSN FROM Employee";
$result2=$conn->query($q2);
if($result2->num_rows>0)
{
	while($lst2=$result2->fetch_assoc())
	{
		$form.="<option value=\"".$lst2['SSN']."\">".$lst2['SSN']."</option>";
	}
	$form.="</select>";
}

//$form.="<form action=\"department_record.php\" method=\"POST\" id=\"addmanager\">";
$form.="<br><br><input type=\"submit\" value=\"submit\"></form>";
echo $form;
?>
</fieldset>
<input type="button" value="collapse" onClick="parent.location='admin_profile.php'">
</body>
</html>
