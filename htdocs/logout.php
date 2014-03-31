<?php
session_start();
session_destroy();
header("location: SocialGo_Sign_Up.php");
?>