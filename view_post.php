<?php
//session_start();
include "sqlconnection.php";
$id=$_GET['post_id'];

$querydate="SELECT * FROM posts,user WHERE posts.postby=user.id && verified=1 && publish=1 ORDER BY datetime";
	$resultdate=mysqli_query($conn,$querydate);

$queryrate="SELECT * FROM posts,user WHERE posts.postby=user.id && verified=1 && publish=1 ORDER BY rating";
	$resultrate=mysqli_query($conn,$queryrate);

$queryid="SELECT * FROM posts WHERE post_id=$id";
	$resultid=mysqli_query($conn,$queryid);
 
			if (mysqli_num_rows($resultid) > 0){
        	$valuei=mysqli_fetch_array($resultid);
        	$uid=$valuei['postby'];
        }
$queryu="SELECT * FROM user WHERE id=$uid";
	$resultu=mysqli_query($conn,$queryu);
	if (mysqli_num_rows($resultu) > 0){
        	$valueu=mysqli_fetch_array($resultu);
        	$uname=$valueu['u_name'];
        }

?>

<!DOCTYPE html>
<html>
<head>
	<title>KBLogs: BlogReads</title>
	<link rel="stylesheet" type="text/css" href="css/post.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<link rel="shortcut icon" href="img/blog.ico" type="favicon/ico" />
	
</head>
<body>
<div class="body">
	<div class="readermenu">

		<ul>
		<?php echo $valuei['title'];?>	&nbsp; -By <?php echo "$uname";?>
		<li><a href="index.php" style="text-decoration: none;color: inherit;">Home</a></li>
		</ul>
	</div>
	<div class="blogsec">
<?php
	echo $valuei['content'];
?>
	
	</div>
	<div style="width: 20%; height: 90%; position: absolute;top: 0px;right: 0px">
		<div id="righttitle" style="border: 2px solid #666666;">
			Recent Blogs !!!
		</div>
		<div id="righttileholder">
		<ul>
		<?php 
			if (mysqli_num_rows($resultdate) > 0){
        		while($value=mysqli_fetch_array($resultdate)){
?>					
					<li>
					<?php echo "<a href=view_post.php?post_id=".$value['post_id']." title=ReadFull>";?>
						<div id="rttile">
               				<div id="rtbtitle">
               					<u><?php echo $value['title']; ?></u>
               					<div id="rtdtime"><?php echo $value['datetime']; ?> <br><b><?php echo $value['rating']; ?> StarRating</b></div>
               				</div>
               				
               				<div id="rtbontent"><?php echo $value['content']; ?></div>

           				</div>
           				<?php echo "</a>";?>
           			</li>
           			
<?php
        		}
   			 }
?>
</ul>
		</div>
	</div>

</div>
<div style="height: 250px; position: relative;bottom:12px;">
		<div id="bottomtitle">
			Top Rated Blogs !!!
		</div>
		<div id="bottomtileholder">
		<ul>
		<?php 
			if (mysqli_num_rows($resultrate) > 0){
        		while($value=mysqli_fetch_array($resultrate)){
?>					
					<li>
					<?php echo "<a href=view_post.php?post_id=".$value['post_id']." title=ReadFull>";?>
						<div id="bottile">
               				<div id="botbtitle">
               					<u><?php echo $value['title']; ?></u>
               					<div id="botdtime"><?php echo $value['datetime']; ?> <br><b><?php echo $value['rating']; ?> StarRating</b></div>
               				</div>
               				
               				<div id="botbontent"><?php echo $value['content']; ?></div>

           				</div>
           				<?php echo "</a>";?>
           			</li>
           			
<?php
        		}
   			 }
?>
</ul>
		</div>
	</div>
</body>
</html>