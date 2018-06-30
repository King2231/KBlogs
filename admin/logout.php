<?php
session_start();
session_destroy();
session_start();
$_SESSION["error"]="You Are Now Logged Out";
header('Location:admin_login.php');
?>