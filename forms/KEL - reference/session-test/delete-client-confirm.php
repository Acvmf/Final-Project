<?php
// File: delete-client-confirm.php
// Copyright (C) 2012 WoodDuck Computer Consulting

include "./header.php";
get_globals();
my_connect();

echo "<H3>Delete Client Confirmation</H3>\n";

// Fetch ID from the FORM POST data
$ID         = $_POST['ID'];
decho("Confirming delete client '$ID' ... <BR>");

// Do a SELECT query to get the client name data
$query = "SELECT ID,FName,MName,LName from clients WHERE ID = '$ID'";
$result = try_query($query);
if (!show_client_result($result))
	{
	echo "<B>No such client as ID = '$ID'.</B><P>\n";
	}
else
	{
	echo "<FORM ACTION=\"./delete-client-result.php\" METHOD=post>\n<P>\n" .
		"<INPUT TYPE=hidden NAME=ID VALUE=$ID>\n" .
		"<INPUT TYPE=submit VALUE=\"  DELETE THIS CLIENT  \">" .
		"</FORM>\n";
	}
my_disconnect();

?>

<P>
<A HREF="./delete-client.php"><BUTTON TYPE=button> Delete a different client </BUTTON></A><P>
<A HREF="./main.php"><BUTTON TYPE=button> CANCEL (Return to main page) </BUTTON></A><P>
<A HREF="./logout.php"><BUTTON TYPE=button> Logout </BUTTON></A>

<?php
include "./footer.php";
?>
