<?php
include('connect.php');
function SignIn()
{
	session_start();   //starting the session for user profile page
	if(!empty($_POST['user']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
	{
		$query = mysql_query("SELECT *  FROM username where id = '$_POST[user]' AND password = '$_POST[pass]'") or die(mysql_error());
		$row = mysql_fetch_array($query) or die(mysql_error());
		if(!empty($row['id']) AND !empty($row['password']))
		{
			$_SESSION['id'] = $row['password'];
			echo "SUCCESSFULLY LOGGED IN  ";
			echo "<br>";
			echo "Welcome !! " . $_POST['user']. "<br><br>"; 
			if(strcmp($row['position'],"admin")==0)
			{
				header("Location: ./admin/admin_profile.php");
			}
			if(strcmp($row['position'],"employee")==0)
			{
				header("Location: ./employee/employee_profile.php?ssn=".$row['SSN']);
			}
			if(strcmp($row['position'],"customer")==0)
			{
				header("Location: ./customer/profile.php?id=".$row['SSN']);
			}
			if(strcmp($row['position'],"distributor")==0)
			{
				header("Location: ./distributor/distributor_profile.php?id=".$row['SSN']);
			}
		}
		else
		{
			echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
		}
	}
}
if(isset($_POST['submit']))
{
	SignIn();
}
?>

