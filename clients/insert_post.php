<?php
include "../sqlconnection.php";
session_start();
echo "working";
if(isset($_GET['Submit'])){
	echo "Submit";
	$title=$_GET['title'];
	$content=$_GET['content'];
	$date=date('Y-m-d H:i:s');
	$postby=$_SESSION["user_id"];
	echo "$title $content $date $postby";
	$query=("INSERT INTO posts (title,content,datetime,postby) values ('$title','$content','$date',$postby)");
	$result=mysqli_query($conn,$query);
	header('Location:/bloghtml/clients/c_errblogs.php');
}
else{
	if(isset($_GET['Publish'])){
		echo "Publish";
		$title=$_GET['title'];
		$content=$_GET['content'];
		$date=date('Y-m-d H:i:s');
		$postby=$_SESSION["user_id"];
		echo "$title $content $date $postby";
		$query=("INSERT INTO posts (title,content,datetime,postby,publish) values ('$title','$content','$date',$postby,1)");
		$result=mysqli_query($conn,$query);
		header('Location:/bloghtml/clients/c_urblogs.php');
	}
}

?>