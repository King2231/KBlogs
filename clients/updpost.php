<?php
session_start();
include "../sqlconnection.php";

if(isset($_GET['Update']))
{
	$id=$_GET['post_id'];
	$title=$_GET['title'];
	$content=$_GET['content'];
	$query1="UPDATE posts SET title='$title',content='$content' WHERE post_id=$id";
	echo $content;
	$result=mysqli_query($conn,$query1);
	header('Location:c_urblogs.php');
}
if(isset($_GET['Publish']))
{
	$id=$_GET['post_id'];
	$title=$_GET['title'];
	$content=$_GET['content'];
	$query1="UPDATE posts SET title='$title',content='$content',publish=1 WHERE post_id=$id";
	echo $content;
	$result=mysqli_query($conn,$query1);
	header('Location:c_urblogs.php');
}
if(isset($_GET['Cancel']))
{
	header('Location:c_urblogs.php');
}
?>