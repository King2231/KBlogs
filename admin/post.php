<?php
session_start();
include "../sqlconnection.php";
$query="SELECT * FROM posts WHERE verified=0 && publish=1 ORDER BY datetime";
    $result=mysqli_query($conn,$query);
?>
<html>
 	<head>
 		<title>
 			KBlogs : Posts
 		</title>
 		<link rel="stylesheet" type="text/css" href="css/admin.css">
 		<link rel="icon" type="image/icon" href="img/blog.ico" />
 	</head>
 
 	<body>
 		<div class="brand">
        	<a href= "#" style= "text-decoration:none; color:#ffffff" >&nbsp;&nbsp;&nbsp;&nbsp;****KBlogs *******</a>
    	</div>
 		
 		<div class="menu">
 		<br>
 			<div class="menutext">
 				<center>
 		 			Hi Admin.<br>
 					Hope you are having a good time.
 				</center>
 			</div>
 			<div class="col-3">
 				<ul>
          <li>
            <a href="viewpost.php?post_id=78"><span class="glyphicon glyphicon-tag">&nbsp;<font size="5px" face="Brush Script MT">ReadPosts</font></span></a>
          </li>
          <li>  
            <a href="post.php"><span class="glyphicon glyphicon-question-sign">&nbsp;<font size="5px" face="Brush Script MT">Pending</font></span></a>
          </li>

          <li>
            <a href="logout.php"><span class="glyphicon glyphicon-log-out">&nbsp;<font size="5px" face="Brush Script MT">Logout</font></span></a>
          </li>
        </ul>
 			</div>
 		</div>
 		
 		<div class="admincontent">
<?php
    if (mysqli_num_rows($result) > 0){
      while($value=mysqli_fetch_array($result)){
?>
 			  <div id="blog">
               <div id="btitle"><u><?php echo $value['title']; ?></u></div>
               <div id="dtime"><?php echo $value['datetime']; ?></div>
               <div id="bontent"><?php echo $value['content']; ?></div>
               <div id="optns">
               <ul>
               <li><?php echo "<a href=verify_post.php?post_id=".$value['post_id'].">Verify</a>";?></li>
               </ul>
               </div>
           </div>
           <hr><hr><br>
<?php
        }
    }else
    {
?>
        <div style="font-size: 35px"> Hey...It Seems You Don't Have Any Pending Tasks To Be Done....;)<br>You Have Time To Read Blogs.... ;)</div>
<?php
        }
?>
 		</div>
 	 	
 	 	<div class="copyright">
       		<p>
       			Copyright &copy; KING
       		</p>  
     	</div>
 	</body>
