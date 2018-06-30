<?php
session_start();
if (isset($_SESSION["name"]) && !empty($_SESSION["name"])) {  
   $name=$_SESSION["name"];

include "../sqlconnection.php";
$id=$_GET['post_id'];
$queryu="SELECT * FROM posts WHERE post_id=$id";
    $resultu=mysqli_query($conn,$queryu);
    if (mysqli_num_rows($resultu) > 0){
            $valueu=mysqli_fetch_array($resultu);
        }
}

else{
    session_destroy();
    session_start();
    $_SESSION["error"] ="Please Login To Continue";
    header('Location:/bloghtml/login1.php');
}
?>
<html>
    <head>
        <title>
            KBlogs : <?php echo "$name"?> : NewBlog
        </title>
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
                        <a href="c_urblogs.php"><span class="glyphicon glyphicon-book">&nbsp;<font size="5px" face="Brush Script MT">AllBlogs</font></span></a>
                    </li>
                    <li>    
                        <a href="c_errblogs.php"><span class="glyphicon glyphicon-question-sign">&nbsp;<font size="5px" face="Brush Script MT">Pending</font></span></a>
                    </li>
                    <li>
                        <a href="c_urprofile.php"><span class="glyphicon glyphicon-cog">&nbsp;<font size="5px" face="Brush Script MT">Profile</font></span></a>
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
        
        <div class="admincontent">
           <div style="font-size: 35px"> Hey...This is Your PlayGround...Play Creative & Unique ;)</div>
        <hr><hr><br>
        <form name="myForm" action="updpost.php" method="get">
            <input type="text" name="title" required placeholder="Enter A Title For Your Blog" value="<?php echo $valueu['title'];?>"><br>
            <br>
            <textarea rows="10" cols="80" required="" name="content" placeholder="Wite Your Content Here......All The Best... ;)"><?php echo $valueu['content'];?></textarea><br>
            <input type="hidden" name="post_id" value="<?php echo $valueu['post_id'];?>">
            <center>
                <input type="submit" name="Update" value="Save">&nbsp;&nbsp;<input type="submit" name="Publish" value="Publish">&nbsp;&nbsp;<input type="submit" name="Cancel" value="Cancel">
            </center>
        </form>
        </div>
        <div class="copyright">
            <p>
                Copyright &copy; KING
            </p>  
        </div>
        </div>
    </body>
