<html>
<head>
<title> APPLY FOR LEAVE</title>
</head>
<body>
<?php
include('./connect.php');
?>
<fieldset>
<legend>Apply for leave</legend>
<form action="./leave_record.php?ssn=<?php echo $_GET['ssn']; ?>" method="POST">
Start_date <br><input type="text" name="startdate" placeholder="dd/mm/yyyy" required><br>
Purpose <br><input type="text" name="purpose" required><br>
Duration(Specify no of days) <br><input type="number" name="duration" required ><br><br>
<input type="submit" value="Submit" ><br>
</form>
</fieldset>
</body>
</html>
