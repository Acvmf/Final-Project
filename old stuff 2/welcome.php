<HTML>
<BODY>
<?php

	$password  = $_POST['pswd'];
	$username  = $_POST['name'];
	
	echo "<BR>Checking authentication of user $username ... <P>";

	if ($username == "" || $password == "") {
		echo "<H3>Sorry, you must supply both username and password.</H3>\n";
		die("<A HREF=\"./index.php\"><BUTTON TYPE=button> Try again or create new account? </BUTTON></A>\n");
	}

	my_connect();
		$sessionid = session_id();
		
		decho("You have authenticated as user '$username'. Your sessionid is '$sessionid'.<BR>");
	my_disconnect();

	$sessionid = session_id();
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	$_SESSION['debug']    = $debug;

?>

<P>
<H3>You have logged in successfully.</H3>

<A HREF="./mainpage.php"><BUTTON TYPE=button> Proceed to the main page </BUTTON></A><P>
<A HREF="./logout.php"><BUTTON TYPE=button> Logout </BUTTON></A>

</BODY>
</HTML>