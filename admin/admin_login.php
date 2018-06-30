<?php
session_start();
?>
<html>
<head>
	<title>Admin : Login</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link rel="icon" type="image/icon" href="img/blog.ico" />
</head>
<body>
<form name="form1" method="get">
<div class="header">Login</div><hr><hr>
<input type="text" name="login_id" placeholder="Enter Login Id"><br><br>
<input type="Password" name="password" placeholder="Enter Password"><br><br>
<input type="submit" name="Submit" value="Submit">
</form>
</body>
</html>


<?php
include "../sqlconnection.php";

function login()
{
	$login_id=$_GET['login_id'];
	$password=$_GET['password'];
	if($login_id=="admin" && $password=="admin")
	{
		$_SESSION["user_id"]="admin";
		$_SESSION["name"] ="admin";
		header('Location:post.php');
	}
	elseif ($login_id=='' && $password=='') {
		echo "Enter Username and password";
	}
	else
		echo "Incorrect credentials";
}
if(isset($_GET['Submit']))
{
	login();
}
?>