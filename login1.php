<?php
include "sqlconnection.php";
	$error="";
	if(isset($_GET['Submit']))
	{
		$login_id=$_GET['mail'];
		$password=$_GET['pass'];
		$query="SELECT * FROM user WHERE u_mail='$login_id'";
		$result=mysqli_query($conn,$query);
		$value=mysqli_fetch_assoc($result);
		if($login_id==$value['u_mail'] && $password==$value['u_pass'])
		{
			echo "login successful";
			session_start();
			$_SESSION["user_id"]=$value['id'];
			$_SESSION["name"] =$value['u_name'];
			header('Location:/bloghtml/clients/c_home.php');
		}
		else
		{
			$error="Incorrect Credentials. Please Try Again...!!!!";
		}
	}
	else
	{
		session_start();
		if(isset($_SESSION['error']) && !empty($_SESSION['error']))
		{
			$error=$_SESSION["error"];
			session_destroy();
		}
		else{
			session_destroy();
		}
	}
?>		
<html>
<head>
	<title>KBlogs : Login</title>
	<link rel="shortcut icon" href="img/blog.ico" type="favicon/ico" />
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<script type="text/javascript">
 		function validateForm()
 		{
    		var x = document.forms["myForm"]["mail"].value;
    		var atpos = x.indexOf("@");
    		var dotpos = x.lastIndexOf(".");
    		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
    		{
        		alert("Not a valid e-mail address");
				return false;
			}
		}
	</script>
</head>	
<body>
	<div class="signin">
 		<div class="header1">
 		<div style="float: right; position: absolute;right: 50px; top: 10px;font-size: 80px; color: #ffffff;">
 				<a href="index.php" style="text-decoration: none; color: inherit;" title="Home"><span class="glyphicon glyphicon-home"></span></a>
 				</div>
 			<u>Sign In</u><br>
 		</div>
 		<form name="myForm" action="login1.php" onsubmit="return validateForm();" method="get">
 			<input type="text" name="mail" required placeholder="Enter Your E-mail"><br><br><br><br><br>
 			<input type="Password" name="pass" required placeholder="Enter Password"><br><br><br><br>
 			<center>
 				<input type="submit" value="submit" name="Submit">
 				<input type="reset" value="reset">
 			</center>
 		</form>
 		<div style="color: #ffffff;font-family: Candara, Calibri, Segoe, 'Segoe UI', Optima, Arial, sans-serif;font-size: 30px;">
 			<?php echo"$error";?>
		</div>
 	</div>
</body>
</html>