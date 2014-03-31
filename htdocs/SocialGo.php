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

?>
	<h3 align="center">Welcome to SocialGo</h3><br />
					<p align="center">Welcome to SocialGo the new generation social media site that 
					allows<br /> our users to connect with the world around them and 
					and makes our world a more connected place.
					</p>
				<table>
					<tr>
						<td width="37%" valign="top">
							<form acition="#" method="POST">
								<input type="text" placeholder="First Name" name="fname"><br /><br /><br />
								<input type="text" placeholder="Last Name" name="lname"><br /><br /><br />
								<input type="text" placeholder="Username" name="username"><br /><br /><br />
								<input type="text" placeholder="Your Email" name="email"><br /><br /><br />
								<input type="text" placeholder="Re-Enter Your Email" name="email2"><br /><br /><br />
								<input type="password" placeholder="Enter Password" name="pswd"><br /><br /><br />
								<input type="password" placeholder="Re-Enter Password" name="pswd2"><br /><br /><br />
								<input type="submit" name="reg" value="Join The Fun!" text-align="center"><br /><br /><br />
							</form>
						</td>
					</tr>
				</table>
 				</td>
			</tr>
		</table>