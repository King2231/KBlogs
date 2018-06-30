<?php
session_start();
?>

<?php
include "../sqlconnection.php";

	$id=$_GET['post_id'];
	$query="UPDATE posts SET verified=1 WHERE post_id=$id";
	$result=mysqli_query($conn,$query);
	header('Location:post.php');

?>