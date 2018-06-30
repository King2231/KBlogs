<?php
session_start();
?>

<?php
include "../sqlconnection.php";

	$id=$_GET['post_id'];
	echo $id;
	$query="DELETE FROM posts WHERE post_id=$id";
	$result=mysqli_query($conn,$query);
	header('Location:/bloghtml/clients/c_urblogs.php');

?>