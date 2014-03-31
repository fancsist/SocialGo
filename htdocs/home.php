<?php
include ( "./inc/header.inc.php" );
echo $_SESSION["user_login"];
echo "<br /> Would you like to logout? <a href='logout.php'>Logout</a>";
?>