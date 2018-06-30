<?php
session_start();
include "../sqlconnection.php";
if (isset($_SESSION["name"]) && !empty($_SESSION["name"])){  
    $name=$_SESSION["name"];
    $user_id=$_SESSION["user_id"];
    $user_id=$_SESSION["user_id"];   
?>
<html>
    <head>
        <title>
            KBlogs : <?php echo "$name"?> : Blogs
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
                        <a href="c_newpost.php"><span class="glyphicon glyphicon-plus">&nbsp;<font size="5px" face="Brush Script MT">NewBlog</font></span></a>
                    </li>
                    <li>
                        <a href="c_urblogs.php"><span class="glyphicon glyphicon-book">&nbsp;<font size="5px" face="Brush Script MT">AllBlogs</font></span></a>
                    </li>
                    <li>
                        <a href="viewpost.php?post_id=78"><span class="glyphicon glyphicon-bookmark">&nbsp;<font size="5px" face="Brush Script MT">ReadBlogs</font></span></a>
                    </li>
                    <li>
                        <a href="c_urprofile.php"><span class="glyphicon glyphicon-cog">&nbsp;<font size="5px" face="Brush Script MT">Profile</font></span></a>
                    </li>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out">&nbsp;<font size="5px" face="Brush Script MT">Logout</font></span></a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="admincontent">
           
<?php
    $query="SELECT * FROM posts WHERE postby=$user_id && publish=0 ORDER BY post_id DESC";
    $result=mysqli_query($conn,$query);
    /*$value=mysqli_fetch_array($result);
    if(!$value)
    {
        echo "No Posts to show";
    }*/
    if (mysqli_num_rows($result) > 0){
?>
            <div style="font-size: 30px"> Hey...These Are Your Pending Blogs. <br>Complete Them & publish them Your Readers Must Be Waiting....;)</div> <hr><hr><br>
<?php
        while($value=mysqli_fetch_array($result)){
            ?>
           <div id="blog">
               <div id="btitle"><u><?php echo $value['title']; ?></u></div>
               <div id="dtime">Last Updated: &nbsp;<?php echo $value['datetime']; ?></div>
               <div id="bontent"><?php echo $value['content']; ?></div>
               <div id="optns"><ul><li><?php echo "<a href=viewpost.php?post_id=".$value['post_id'].">View</a>";?></li><li><?php echo "<a href=editpost.php?post_id=".$value['post_id'].">Edit</a>";?></li><li><?php echo "<a href=delpost.php?post_id=".$value['post_id'].">Delete</a>";?></li></div>
           </div>
           <hr><hr><br>
<?php
        }
    }
    else{
?>
        <div style="font-size: 35px"> Whoaa...You Don't Have Any Unpublished Blogs....;)<br>Click Below To Start New One.</div>
        <div id="bottomopt" class="col-12">
            <a href="c_newpost.php" id="bottomleft" class="col-5">
                <img src="img/marker.png">
                <div id="bottomleftright" class="col-6">
                Hey !!!!<br> Click Here To Start New Blog...
                </div>
            </a> 
        </div>

<?php
        }
?>
    </div>
        <div class="copyright">
            <p>
                Copyright &copy; KING
            </p>  
        </div>
        </div>
    </body> 
<?php
}
else{
    session_destroy();
    session_start();
    $_SESSION["error"] ="Please Login To Continue";
    header('Location:/bloghtml/login1.php');
}
?>
        

