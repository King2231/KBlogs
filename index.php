<?php
	session_start();
	include "sqlconnection.php";
	$query="SELECT * FROM posts,user WHERE posts.postby=user.id && verified=1 && publish=1 ORDER BY rating DESC LIMIT 0, 5";
	$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>KBlogs ;)</title>
		<link rel="shortcut icon" href="img/blog.ico" type="favicon/ico" />
		<link rel="stylesheet" type="text/css" href="css/mystyle.css">
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
		<script src="js/myscript.js" type="text/javascript"></script>
		<style type="text/css">
			#nav > li{
				height: 22px;
				overflow: hidden;
			}
		</style>
	</head>
	<body>
 		<div id="signin">
 		<div class="closesignin"><img src="img/cancel.png" width="100px" height="100px"></div>
 			<div class="signin">
 				<div class="header">
 					<u>Sign In</u>
 				</div>
 				<form name="myForm" action="login1.php" onsubmit="return validateForm();" method="get">
 					<input type="text" name="mail" required style="float: right;" placeholder="Enter Your E-mail">
 					<br><br>
 					<input type="Password" name="pass" required style="float: right;" placeholder="Enter Password"><br><br>
 					<center><input type="submit" value="Submit" name="Submit"> <input type="reset" value="reset" name="Reset"></center>
 				</form>
 			</div>
 		</div>
		
		<div id="register">
			<div class="closereg"><img src="img/cancel.png"></div>
			<div class="register">
 				<div class="header1"><u>Register</u></div><br>
 				<form name="myForm1" action="reg.php" onsubmit="return validateForm1();" method="get">
 					<input type="text" name="name" required placeholder="Enter Your Name"><br><br>
 					<input type="text" name="mail" required placeholder="Enter Your E-mail"><br><br>
 					<input type="Password" name="pass" required placeholder="Enter Your Password Here"><br><br>
 					<input type="radio" name="gender" value="Male">Male&nbsp;<input type="radio" name="gender" value="Female">Female
 					<br><br>
 					<center><input type="submit" value="submit" name="submit"> <input type="reset" value="reset"></center>
 				</form>
 			</div>
		</div>

		<div class="menu">
 			<br>
 			<div class="col-3">
 				<ul id="nav">
 					<li>
 						<a href="#home" class="slider"><span class="glyphicon glyphicon-home">&nbsp;<font size="5px" face="Brush Script MT">Home</font></span></a>
 					</li>
 					<li>	
 						<a href="#blog" class="slider"><span class="glyphicon glyphicon-pencil">&nbsp;<font size="5px" face="Brush Script MT">Blogs</font></span></a>
 					</li>
 					<li>
 						<a href="#about" class="slider"><span class="glyphicon glyphicon-info-sign">&nbsp;<font size="5px" face="Brush Script MT">About Us</font></span></a>
 					</li>

 					<li>
 						<div id="signin_btn"><span class="glyphicon glyphicon-log-in">&nbsp;<font size="5px" face="Brush Script MT">Signin</font></span></div>
 					</li>
 					<li>
 						<div id="reg_btn"><span class="glyphicon glyphicon-registration-mark">&nbsp;<font size="5px" face="Brush Script MT">Register</font></span></div>
 					</li>
 				</ul>
 			</div>
 		</div>


 		<div id="home">
 			<div class="write">
         		<div class="write1"></div>	
         		<div id="rightbox" class="col-4">
         			<div id="righttop" class="col-11">
     					<img src="img/signin.png">
     					<div id="righttopright" class="col-5">
     						Hey ! Why waiting...come login and continue your Blogs...
     					</div>
         			</div>
         			<div id="rightbottom" class="col-11">
     					<img src="img/user.png">
     					<div id="rightbottomright" class="col-5">
     						New User ? Register Here & Start Blogging
     					</div>
         			</div>	
         		</div>
         	</div>
    		<a href="#blog" class="arrow"><img src="img/darrow.png" height="100" width="150"></a>
        </div> 

	 	<div id="blog">
			<div id="tileholder" class="col-12">
				<div style="padding-left: 220px;">
					<div id="tiletitle">
						<div style="float: right; color: #ffffff; background-color: rgba(0,0,0,0.5);">
							Some Of Our Top Rated Blogs
						</div>
						<hr><hr>
					</div>
					<ul>
						<?php 
							if (mysqli_num_rows($result) > 0){
								while($value=mysqli_fetch_array($result)){
						?>					
							<li>
							<?php echo "<a href=view_post.php?post_id=".$value['post_id']." title=ReadFull>";?>
								<div id="tile">
		               				<div id="btitle">
		               					<u><?php echo $value['title']; ?></u>
		               					<div id="dtime"><?php echo $value['datetime']; ?> <br><b><?php echo $value['rating']; ?> StarRating</b></div>
		               				</div>
		               				
		               				<div id="bontent"><?php echo $value['content']; ?></div>

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
			<a href="#about" class="arrow"><img src="img/darrow.png" height="100" width="150"></a>
			<a href="#home" class="uarrow"><img src="img/up.png" height="100" width="150"></a>
		</div>
		
		<div id="about">
			<a href="#home" class="uarrow"><img src="img/up.png" height="100" width="150"></a>
		</div>
</body>
</html>