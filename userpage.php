<?php
session_start();

echo "Welcome ".$_SESSION["name"];
?>
<body>
<br><a href="insert_post.php">New Post</a>
<br><a href="user_viewpost.php">View Published Posts</a>
<br><a href="unpublished_userview.php">View UnPublished Posts</a>
<br><a href="logout.php">Logout</a>


