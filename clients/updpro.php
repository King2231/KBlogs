<?php
include "../sqlconnection.php";
session_start();
$id=$_SESSION["user_id"];
	$name=$_GET['name'];
	$mail=$_GET['mail'];
	$pass=$_GET['pass'];
	$query="UPDATE user SET u_name='$name',u_mail='$mail',u_pass='$pass' WHERE id=$id";
	$result=mysqli_query($conn,$query);
	header('Location:c_urprofile.php');
/*if(isset($_GET['Update']))
{
	upd();
	header('Location:/blogv1/user_viewpost.php');
}*/
?>