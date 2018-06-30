<?php
//session_start();
include "../sqlconnection.php";
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
	<title>KBlogs: BlogReads</title>
	<link rel="stylesheet" type="text/css" href="css/post.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<link rel="shortcut icon" href="img/blog.ico" type="favicon/ico" />
	<style>
	div.stars {
  width: 300px;
  display: inline-block;
}
input.star { display: none; z-index: 100;}

label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}

input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before { color: #F62; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}
</style>
</head>
<body>
<div class="body">
	<div class="readermenu">

		<ul>
		<?php echo $valuei['title'];?>	&nbsp; -By <?php echo "$uname";?>
			<li>
			<div class="stars">
  				<form action="rate.php" id="jsform" method="_GET">
    				<input class="star star-5" id="star-5" type="radio" name="star" value="5"/>
    				<label class="star star-5" for="star-5"></label>
    				<input class="star star-4" id="star-4" type="radio" name="star" value="4"/>
    				<label class="star star-4" for="star-4"></label>
    				<input class="star star-3" id="star-3" type="radio" name="star" value="3"/>
    				<label class="star star-3" for="star-3"></label>
    				<input class="star star-2" id="star-2" type="radio" name="star" value="2"/>
    				<label class="star star-2" for="star-2"></label>
    				<input class="star star-1" id="star-1" type="radio" name="star" value="1"/>
    				<label class="star star-1" for="star-1"></label>
            <input type="submit" name="submit" value="Rate" style="position: absolute;top: 10px;right: 10px; z-index: 10;">
  				</form>
			</div>
		</li>
		<li><a href="post.php" style="text-decoration: none;color: inherit;">Home</a></li>
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
					<?php echo "<a href=viewpost.php?post_id=".$value['post_id']." title=ReadFull>";?>
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
					<?php echo "<a href=viewpost.php?post_id=".$value['post_id']." title=ReadFull>";?>
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
  <script type='text/javascript'>

 $(document).ready(function() { 
   $('input[name=star]').change(function(){
        $('form').submit();
   });
  });

</script>
</body>
</html>