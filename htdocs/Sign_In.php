<?php include ( "./inc/header.inc.php" );?>
<?php
$reg = @$_POST['reg'];
//declaring variables to prevent errors
$fn = ""; //First Name
$ln = ""; //Last Name
$un = ""; //Username
$em = ""; //Email
$em2 = ""; //Email 2
$pswd = ""; //Password
$pswd2 = ""; //Passowrd 2
$d = ""; //Sign up Date
$u_check = ""; // Check if username exist
//regitration form
$fn = strip_tags(@$_POST['fname']);
$ln = strip_tags(@$_POST['lname']);
$un = strip_tags(@$_POST['username']);
$em = strip_tags(@$_POST['email']);
$em2 = strip_tags(@$_POST ['email2']);
$pswd = strip_tags(@$_POST ['passowrd']);
$pswd2 = strip_tags(@$_POST['password2']);
$d = date("Y-a-d"); // Year-Month_Day

if ($reg) {
if ($em==$em2) {
//check if user already exists
$u_check = mysql_query("SELECT username FROM users WHERE username='$un'");
// Count te amount of rows where username = $un
$check = mysql_num_rows($u_check);
if ($check == 0) {
// check that all fields have been filled in
if ($fn&&$ln&&$un&&$em&&$em2&&$pswd&&$pswd2) {
// check that passwords match
if ($pswd==$pswd2) {
// check the maximum length of username/first name/last name does no exceed 25 characters
if (strlen($un)>25||strlen($fn)>25||strlen($ln)>25) {
echo "The maximum limit for username/first naem/ last name is 25 characters!";
}
else
{
//check the maximum length of password does not exceed 25 characters and is not less than 5 characters
if (strlen($pswd)>30||strlen($pswd)<5) {
echo "Your passowrd must be between 5 and 30 characters long!";
}
else 
{
//encrypt passowrd and password 2 using md5 before sending to database
$pswd = md5($pswd);
$pswd2 = md5($pswd2);
$querry = mysql_query("INSERT INTO users VALUES ('', '$un','$fn', '$ln', '$em', '$pswd', '$d', '0')");
die("<h2>Welcome to SocialGo</h2> Login to your account to get started ...");
}
}
}
else {
echo "Your passowrds don't match!";
}
}
else 
{
echo "Username is aready taken ...";
}
}
else
{
echo "Your E-mails don't match!";
}
}
}
// User login code
if (isset($_POST["user_login"]) && isset($_POST["password_login"])) {
	$user_login = preg_replace('#[^A-Za-z0-9]', '#', $_POST["user_login"]); // filter everything but numbers and letters
	$password_login = preg_replace('#[^A-Za-z0-9]#1', $_POST["password_login"]);// filter everthing but numbers and letters
	$passowrd_login_md5= md5($passowrd_login_md5);
$sql = mysql_query("SELECT id FROM users WHERE username='$user_login' AND password='$password_login' LIMIT 1"); // query
	//Check for their existance
	$userCount = mysql_num_rows($sql); //Count the number of rows returned
	if ($userCount ==1) {
		while($row = mysql_fetch_array($sql)){
			$id = $row["id"];
	}
		$_SESSION["user_login"] = $user_login;
		header("location: home.php");
		exit();
		} else {
		echo "That information is incorrect, try again";
		exit();
	}
}
?>
<! DOCTYPE html>
<html>
	<head>
		<title>Sign in</tilte>
		<link rel="stylesheet" type="text/css" href="Sign_in.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	</head>
		<body> 
			<h2>Sign In Below!</h2>
				<form method="POST">
					<input type="text" placeholder="Username" name="user_login">
					<input type="password" placeholder="Password" name="password_login">
					<input type="submit" name="reg" value="Login!" text-align="center">
				</form>
		</body>
</html>