<!--?php
session_start();
$name=$_SESSION["name"];
?-->
<?php
include "../sqlconnection.php";
session_start();
if (isset($_SESSION['name']) && !empty($_SESSION['name'])) {
   $id=$_SESSION["user_id"];
   $name=$_SESSION["name"];
   $queryu="SELECT * FROM user WHERE id=$id";
    $resultu=mysqli_query($conn,$queryu);
    if (mysqli_num_rows($resultu) > 0){
            $valueu=mysqli_fetch_array($resultu);
        }
}
else{
    $_SESSION['error']="Please Login Before You Continue";
       header('Location:/bloghtml/login1.php');
}

?>
<html>
    <head>
        <?php
        echo "<title> KBlogs : $name </title>";
        ?>
        <link rel="stylesheet" type="text/css" href="css/user1.css">
        <link rel="icon" type="image/icon" href="img/blog.png" />
    </head>
    <body>
        <div class="body">
        <div class="menu">
            <div class="col-3">
                <ul>
                    <li>
                        <a href="c_home.php"><span class="glyphicon glyphicon-home">&nbsp;<font size="5px" face="Brush Script MT">Home</font></span></a>
                    </li>
                    <li>
                        <a href="c_newpost.php"><span class="glyphicon glyphicon-plus">&nbsp;<font size="5px" face="Brush Script MT">NewBlog</font></span></a>
                    </li>
                    <li>
                        <a href="c_urblogs.php"><span class="glyphicon glyphicon-book">&nbsp;<font size="5px" face="Brush Script MT">AllBlogs</font></span></a>
                    </li>
                    <li>    
                        <a href="c_errblogs.php"><span class="glyphicon glyphicon-question-sign">&nbsp;<font size="5px" face="Brush Script MT">Pending</font></span></a>
                    </li>
                    <li>
                        <a href="viewpost.php?post_id=78"><span class="glyphicon glyphicon-bookmark">&nbsp;<font size="5px" face="Brush Script MT">ReadBlogs</font></span></a>
                    </li>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out">&nbsp;<font size="5px" face="Brush Script MT">Logout</font></span></a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="admincontent" id="user">
           <?php echo"<h1>Hi $name...!!!! You Can Update All Your Details Here... ;)</h1>";?><hr><hr>
            <form action="updpro.php" method="get">
            <input type="text" name="name" value="<?php echo $valueu['u_name'];?>"><br>
            <input type="text" name="mail" value="<?php echo $valueu['u_mail'];?>"><br>
            <input type="text" name="pass" value="<?php echo $valueu['u_pass'];?>"><br>
            <center><input type="submit" value="Update" name="submit"></center>
            </form>
        </div>
        <div class="copyright">
            <p>
                Copyright &copy; KING
            </p>  
        </div>
        </div>
    </body>

