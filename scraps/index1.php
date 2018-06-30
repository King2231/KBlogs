<!DOCTYPE html>
<html>
	<head>
		<title>KBlogs ;)</title>
		<link rel="shortcut icon" href="img/blog.ico" type="favicon/ico" />
		<link rel="stylesheet" type="text/css" href="css/mystyle.css">
		<script src="js/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.11.2.js" integrity="sha256-WMJwNbei5YnfOX5dfgVCS5C4waqvc+/0fV7W2uy3DyU=" crossorigin="anonymous"></script>
	</head>
	<body>
 		<div id="signin">
 		<div class="closesignin"><img src="img/cancel.png" width="100px" height="100px"></div>
 			<div class="signin">
 			<div class="header"><u>Sign In</u></div>
 				<form name="myForm" action="#" onsubmit="return validateForm();" method="post">
 					<input type="text" name="mail" required placeholder="E-mail" style="float: right;"><br><br>
 					<input type="Password" name="pass" required placeholder="Your Password Here" style="float: right;"><br><br>
 					<center><input type="submit"> <input type="reset"></center>
 				</form>
 			</div>
 		</div>
			







		<div id="register">
		<div class="closereg"><img src="img/cancel.png"></div>
			<div class="register">
 				<div class="header1"><u>Register</u></div><br>
 				<form name="myForm" action="#" onsubmit="return validateForm();" method="post">
 					<input type="text" name="mail" required placeholder="Enter Your E-mail Here"><br><br>
 					<center><input type="submit"> <input type="reset"></center>
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
 						<a href="#contact" class="slider"><span class="glyphicon glyphicon-phone-alt">&nbsp;<font size="5px" face="Brush Script MT">ContactUs
 						</font></span></a>
 					</li>
 					<li>
 						<div id="signin_btn"><span class="glyphicon glyphicon-log-in">&nbsp;<font size="5px" face="Brush Script MT">Signin</font></span></div>
 					</li>
 					<li>
 						<div id="reg_btn"><span class="glyphicon glyphicon-registration-mark">&nbsp;<font size="5px" face="Brush Script MT">Register</font></span></div>
 					</li>
 					<li>
 						<a href=""><span class="glyphicon glyphicon-phone-alt">&nbsp;<input type="text" name="search"></span></a>
 					</li>
 				</ul>
 			</div>
 		</div>
 		<div id="home">
 			<!--div class="brand">
 				****KBlogs****
 			</div-->
 			<div class="write">
         		<div class="write1">
         				
         		</div>
         			
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
         	<!--div class="arrow" id="arrow"-->
        		<a href="#blog" class="arrow"><img src="img/darrow.png" height="100" width="150"></a>
        	<!--/div-->
        </div> 
		 <div id="blog">
			BLOG
			<div id="tileholder" class="col-9">
				<div class="row">
					<a href="#" class="col-3" id="tile">
						dhggbn
					<a>
				<a href="#" class="col-3" id="tile">
						dhggbn
					<a>
				<a href="#" class="col-3" id="tile">
						dhggbn
					<a>
				</div>
				<div class="row">
					<a href="#" class="col-3" id="tile">
						dhggbn
					<a>
				<a href="#" class="col-3" id="tile">
						dhggbn
					<a>
				<a href="#" class="col-3" id="tile">
						dhggbn
					<a>
				</div>
				<div class="row">
					<a href="#" class="col-3" id="tile">
						dhggbn
					<a>
				<a href="#" class="col-3" id="tile">
						dhggbn
					<a>
				<a href="#" class="col-3" id="tile">
						dhggbn
					<a>
				</div>
			</div>


			<a href="#about" class="arrow"><img src="img/darrow.png" height="100" width="150"></a>
			<a href="#home" class="uarrow"><img src="img/up.png" height="100" width="150"></a>
		</div>
		<div id="about">
			<a href="#contact" class="arrow"><img src="img/darrow.png" height="100" width="150"></a>
			<a href="#home" class="uarrow"><img src="img/up.png" height="100" width="150"></a>
		</div>
       
		<div id="contact">
			<div class="contactusleft">
          <hr> <u>Contact Us:</u><br>
          <pre><u>Mail Us at:</u>	kingkango123@gmail.com</pre>
          <center>OR</center>
          <pre><u>Call us at:</u>	8898106824/9768205933</pre>
               
    </div>

		</div>
		<div id="copyright">
			COPYRIGHT
			<a href="#home" class="uarrow"><img src="img/up.png" height="100" width="150"></a>
		</div>

        <script type="text/javascript">
        	 $(document).ready(function(){
        	 	setBindings1();
 			});
 				
        	 function setBindings1(){
        	 	$('.slider').click(function(e){
				
					var sectionID=$(this).attr('href');

					$("html body").animate({
						scrollTop:$(sectionID).offset().top
					},1500,'swing');
					e.preventDefault();
					});
        	 }
        	 $(document).ready(function(){
        	 	setBindings2();
 			});
 				
        	 function setBindings2(){
        	 	$('.arrow').click(function(e){
				
					var sectionIDe=$(this).attr('href');

					$("html body").animate({
						scrollTop:$(sectionIDe).offset().top
					},1500,'swing');
					e.preventDefault();
					});
        	 }

        	 $(document).ready(function(){
        	 	setBindings3();
 			});
 				
        	 function setBindings3(){
        	 	$('.uarrow').click(function(e){
				
					var sectionID=$(this).attr('href');

					$("html body").animate({
						scrollTop:$(sectionID).offset().top
					},1500,'swing');
					e.preventDefault();
					});
        	 }	
        	 $(document).ready(function(){
 				$('#signin_btn').click(function(){
					$('#signin').toggleClass('visible');
				});
			});
			$(document).ready(function(){
 				$('#reg_btn').click(function(){
					$('#register').toggleClass('visible');
				});
			});
			$(document).ready(function(){
 				$('.closesignin').click(function(){
					$('#signin').removeClass('visible');
				});
			});
			$(document).ready(function(){
 				$('.closereg').click(function(){
					$('#register').removeClass('visible');
				});
			});	
			 $(document).ready(function(){
 				$('#righttop').click(function(){
					
					$('#signin').addClass('visible');
				});
			});
			$(document).ready(function(){
 				$('#rightbottom').click(function(){
					$('#register').addClass('visible');
				});
			});	

	function validateForm() {
    var x = document.forms["myForm"]["mail"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}	
        </script>
</body>
</html>