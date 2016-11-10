<?php
include '../connect.php';
?>
<html>
<head>
<title>Employee info</title>
<head>
<body>
<fieldset><legend>Enter Details</legend>
<div id="form">
<form method="POST" action="record.php">
<?php
//$qry="SELECT SSN FROM Employee"
/*$q2="SELECT SSN FROM Employee";
$result2=$conn->query($q2);
if($result2->num_rows>0)
{
        while($lst2=$result2->fetch_assoc())
        {
                ="<option value=\"".$lst2['SSN']."\">".$lst2['SSN']."</option>";
        }
        ="</select>";
}
*/
?>

<!--SSN <br> <input type="number" name="ssn" required><br>-->
Fname <br> <input type="text" name="fname" required><br>
Mname <br> <input type="text" name="mname" required><br>
Lname <br> <input type="text" name="lname" required><br>
DOB <br> <input type="text" name="dob" placeholder="dd/mm/yyyy" required><br>
JoinDate <br> <input type="text" name="joindate" placeholder="dd/mm/yyyy" required><br>
Qualification <br> <input type="text" name="qualification" required><br>
Experience <br> <input type="text" name="experience" required><br>
SUPSSN <br><input type="number" name="supssn" required><br>
Salary <br> <input type="number" name="salary" required><br>
DeptNo <br> <input type="number" name="deptno" required><br>
Age <br> <input type="number" name="age" required><br>
Gender <br> <input type="radio" name="gender" value="female" required>Female<br>
<input type="radio" name="gender" value="male" required>Male<br>

<input type="submit" id="button" value="Submit" name="submit"><br>
</form>
</div>
</fieldset>
<input type="button" value="collapse" onClick="parent.location='admin_profile.php'">
<body>
</html>
