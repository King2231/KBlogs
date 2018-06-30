<!--?php
session_start();
$name=$_SESSION["name"];
?-->
<?php
session_start();
if (isset($_SESSION['name']) && !empty($_SESSION['name'])) {
   
   $name=$_SESSION["name"];
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
                        <a href="c_uprofile.php"><span class="glyphicon glyphicon-cog">&nbsp;<font size="5px" face="Brush Script MT">Profile</font></span></a>
                    </li>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out">&nbsp;<font size="5px" face="Brush Script MT">Logout</font></span></a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="admincontent" id="user">
           <?php echo"<h1>Hi $name...!!!</h1>";?><hr><hr>
                <br><div style="background-color: rgba(0,0,0,0.2); padding-left: 10px; padding-right:10px; padding-top: 10px; padding-bottom: 10px; "><font size="5px">Welcome To Your BLogging Area.. Write Your BLogs & Publish Them...<br>Wish You A Great Blogging Experience....</font></div>
                <br><hr>
                <div id="bottomopt" class="col-11">
                    <a href="c_newpost.php" id="bottomleft" class="col-5">
                            <img src="img/marker.png">
                            <div id="bottomleftright" class="col-5">
                                Hey !!!!<br> Click Here To Start New Blog...
                            </div>
                    </a>
                    &nbsp;&nbsp;&nbsp;
                    <a href="c_urblogs.php" id="bottomright" class="col-5">
                            <img src="img/pencil-case.png">
                            <div id="bottomrightright" class="col-5">
                                Click Here<br> To View Your Blogs...
                            </div>
                    </a>  
                </div>


            <!-- Hi !...Write your notes here and access them anytime...Cool Right !!!!
        <hr><hr>
        <form name="myForm" action="AddNotesAction.jsp" method="post">
            Enter A Title For Your Notes !!!
            <input type="text" name="title" required><br>
            Write your Notes here !!!!<br>
            <textarea rows="10" cols="80" required="" name="notes"></textarea><br>
            <center>
                <input type="submit">
            </center>
        </form-->
        </div>
        <div class="copyright">
            <p>
                Copyright &copy; KING
            </p>  
        </div>
        </div>
    </body>

