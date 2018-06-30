<?php
include "sqlconnection.php";
if(isset($_GET['submit']))
{
	if((isset($_GET['name']))&&(isset($_GET['mail']))&&(isset($_GET['pass']))&&(isset($_GET['gender'])))
	{
		$name=$_GET['name'];
		$emailid=$_GET['mail'];
		$password=$_GET['pass'];
		$gender=$_GET['gender'];
		$query=("INSERT INTO user (u_name,u_mail,u_pass,u_gender) values ('$name','$emailid','$password','$gender')");
		$result=mysqli_query($conn,$query);
		session_start();
		$_SESSION['error']="You Are Now Registered. Login & Start Blogging. !!!";
		header("Location:login1.php");
	}
}
?>