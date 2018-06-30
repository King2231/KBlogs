<?php
session_start();
include "../sqlconnection.php";
$id=$_GET['post_id'];
if(isset($_GET['rating']) && isset($_GET['Submit']))
{
	if(empty($_SESSION["name"]))
	{
		echo "Please login to rate";
	}	
	else if($_SESSION["user_id"]==$value['id'])
		{
			echo "You cannot rate your own post";
}
else
{
	/*Insert Rating*/
	$rating=$_POST['rating'];
	if($rating==1)
	{
		$cur_rating=$value['r1'];
		$cur_rating=$cur_rating+1;
		$query="UPDATE posts SET r1='$cur_rating' WHERE post_id=$id";
		$result=mysqli_query($conn,$query);
		echo "Thanks for Rating";
	}
	if($rating==2)
	{
		$cur_rating=$value['r2'];
		$cur_rating=$cur_rating+1;
		$query="UPDATE posts SET r2='$cur_rating' WHERE post_id=$id";
		$result=mysqli_query($conn,$query);
		echo "Thanks for Rating";
	}
	if($rating==3)
	{
		$cur_rating=$value['r3'];
		$cur_rating=$cur_rating+1;
		$query="UPDATE posts SET r3='$cur_rating' WHERE post_id=$id";
		$result=mysqli_query($conn,$query);
		echo "Thanks for Rating";
	}
	if($rating==4)
	{
		$cur_rating=$value['r4'];
		$cur_rating=$cur_rating+1;
		$query="UPDATE posts SET r4='$cur_rating' WHERE post_id=$id";
		$result=mysqli_query($conn,$query);
		echo "Thanks for Rating";
	}
	if($rating==5)
	{
		$cur_rating=$value['r5'];
		$cur_rating=$cur_rating+1;
		$query="UPDATE posts SET r5='$cur_rating' WHERE post_id=$id";
		$result=mysqli_query($conn,$query);
		echo "Thanks for Rating";
	}

	/*Calculate Rating*/
	$query="SELECT * FROM user, posts WHERE user.id = posts.postby && post_id=$id";
	$result=mysqli_query($conn,$query);
	$value=mysqli_fetch_assoc($result);
	$i=0;
	$m=max($value['r1'],$value['r2'],$value['r3'],$value['r4'],$value['r5']);
	if($m==$value['r1'])
	{
		$r1=1;
		$i++;
	}
	else
		$r1=0;
	if($m==$value['r2'])
	{
		$r2=2;
		$i++;
	}
	else
		$r2=0;
	if($m==$value['r3'])
	{
		$r3=3;
		$i++;
	}
	else
		$r3=0;
	if($m==$value['r4'])
	{
		$r4=4;
		$i++;
	}
	else
		$r4=0;
	if($m==$value['r5'])
	{
		$r5=5;
		$i++;
	}
	else
		$r5=0;
	$actual_rating=0;
	$actual_rating=($r1+$r2+$r3+$r4+$r5)/$i;
	$query="UPDATE posts SET rating='$actual_rating' WHERE post_id=$id";
	$result=mysqli_query($conn,$query);
}

}

//header('Location:viewpost.php?post_id=$id');
?>