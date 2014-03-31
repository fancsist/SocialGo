<?php include( "./inc/header.inc.php" ); ?>
<?php
if (isset($_GET['u'])) {
	$username = mysql_real_escape_string($_GET['u']);
	if (ctype_alnum($username)) {
	//Check user exists
	$check = mysql_query("SELECT username, first_name FROM username= '$username'");
	if (mysql_num_rows($check)===1) {
	$get = mysql_fetch_field($check);
	$username = $get['username'];
	$firstname = $get['first_name'];
	}	
	else
	{
	echo "<h2>User does not exist</h2>";
	exit();
	}
	}
}
?>
<h2>Profile page for: <? echo "$username"; ?></h2>
<h2>First name: <? echo "$firstname"; ?></h2>
