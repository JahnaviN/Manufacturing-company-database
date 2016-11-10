<html>
<head>
<title> ADD ORDERS</title>
</head>
<body>
<?php
include('./connect.php');
?>
<fieldset>
<legend>Add Dependents</legend>
<form action="./order_record.php?CustomerID=<?php echo $_GET['CustomerID']; ?>" method="POST">
<!--OrderNo<br><input type="number" name="orderno"><br>-->
ItemCode <br><input type="number" name="itemcode"><br>
Quantity <br><input type="number" name="quantity"><br>
Profit<br><input type="number" name="profit"><br><br>
<input type="submit" value="submit">
</form>
</fieldset>
</body>
</html>
