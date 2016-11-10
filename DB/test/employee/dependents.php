<html>
<head>
<title> ADD </title>
</head>
<body>
<?php
include('./connect.php');
?>
<fieldset>
<legend>Add Dependents</legend>
<form action="./dependent_record.php?ssn=<?php echo $_GET['ssn']; ?>" method="POST">
Name : <br><input type="text" name="name" required><br>
Gender : <br><input type="radio" name="gender" value="female" required>Female<br>
<input type="radio" name="gender" value="male" required>Male<br>
Relation : <br><input type="text" name="relation" required><br>
DOB : <br><input type="text" name="dob" placeholder="dd/mm/yyyy" required ><br><br>
<input type="submit" value="submit">
</form>
</fieldset>
</body>
</html>
