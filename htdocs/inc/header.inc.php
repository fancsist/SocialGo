<?php include( "./inc/connect.inc.php" );
session_start();
if (!isset($_SESSION["user_login"])) {

}
else
{
	$username = $_SESSION["user_login"];
}
?>
<! DOCTYPE html>
<html>
	<head>
		<title>Welcome to SocialGo</title>
		<link rel="stylesheet" type="text/css" href="SocialGoMain.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="headermenu">
			<h2>SocialGo</h2>
					<div id="menu">
						<a href="#"/>Home</a>
						<a href="#"/>Explore</a>
						<a href="#" onClick="window.location='About_Us.php'"/>About Us</a>
						<a href="#" onClick="window.location='Sign_In.php'"/>Sign-in</a>
						<a href="#" onClick="window.location='SocialGo.php'"/>Sign-up</a>
					</div>
					</div>
			</div>
		</div>