<HTML>
<BODY>
<?php

	include "./header.php";

	$password  = $_POST['pswd'];
	$username  = $_POST['name'];
	
	echo "<BR>Checking authentication of user $username ... <P>";

if ($username == "" || $password == "")
	{
	echo "<H3>Sorry, you must supply both username and password.</H3>\n";
	die("<A HREF=\"./login.php\"><BUTTON TYPE=button> Try again </BUTTON></A>\n");
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

<!--
	$connection = mysqli_connect('localhost', "$username", "$password", 'test');
	if (!$connection)
	{
	$error_msg = mysqli_connect_error();
	echo "Authentication failed: $error_msg <P>";
	die ("Sorry, bye.<P></BODY></HTML>");
	}
	/*mysql_select_db("test", $connection);/
	echo "Connected to database ...<P>";
	$query = "select ID, FName, LName from clients";
	echo "Query is: $query <P>";
	$result = mysqli_query($connection, "$query");
	if (!$result)
		{
		echo "result was NULL/invalid<P>";
		}
	while($row = mysqli_fetch_array($result))
  {
  echo $row['ID'] . ": " . $row['FName'] . " " . $row['LName'];
  echo "<br />";
  }
	echo "Closing connection ...<P>";
	mysqli_close($connection);
	echo "Done.<P>";
?>
</BODY>
</HTML>
-->