<?php
// File: validate-login.php
// Copyright (C) 2012 WoodDuck Computer Consulting

include "./header.php";
// Session globals get defined here

// Fetch username and password from the FORM POST data (once only)
$username  = $_POST['username'];
$password  = $_POST['password'];
if ($username == "" || $password == "")
	{
	echo "<H3>Sorry, you must supply non-null username and password.</H3>\n";
	die("<A HREF=\"./login.php\"><BUTTON TYPE=button> Try again </BUTTON></A>\n");
	}	
decho("Checking authentication of user '$username' with password '$password' ... <BR>");

// Try to authenticate to the database, die if fail
my_connect();
$sessionid = session_id();
decho("You have authenticated as user '$username'. Your sessionid is '$sessionid'.<BR>");

// That's all we need to do with the database on this page, so let go
my_disconnect();

// Determine our PHP session ID
$sessionid = session_id();

// Store username and password in the session array for later use (once only)
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
$_SESSION['debug']    = $debug;

?>

<P>
<H3>You have logged in successfully.</H3>

<A HREF="./main.php"><BUTTON TYPE=button> Proceed to the main page </BUTTON></A><P>
<A HREF="./logout.php"><BUTTON TYPE=button> Logout </BUTTON></A>

<?php
include "./footer.php";
?>
