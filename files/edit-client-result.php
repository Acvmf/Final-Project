<?php
// File: edit-client-result.php
// Copyright (C) 2012 WoodDuck Computer Consulting

include "./header.php";
get_globals();
my_connect();

echo "<H3>Edit Client</H3>\n";

// Fetch client ID from the FORM POST data
$ID   = $_POST['ID'];
decho("Editing client ID '$ID' ... <BR>");

// Do a SELECT query to get the old client data
$query = "SELECT ID,FName,MName,LName from clients WHERE ID = '$ID'";
$result = try_query($query);

// Display it as an editable form, including the INPUT boxes
echo "<FORM ACTION=\"./save-client.php\" METHOD=post>\n";
if (show_client_edit_form($result))
	{
	// Display the form buttons only if the return value was TRUE
	echo "<P>" .
		"<INPUT TYPE=submit VALUE=\"  SAVE edited client data  \"><P>\n" .
		"<INPUT TYPE=reset VALUE=\"  Reset to original client data  \"><P>\n";
	}
else
	{
	echo "<P>Sorry, no results match Client ID '$ID'.<P>\n";
	}
echo "</FORM>\n";

my_disconnect();

?>

<P>
<A HREF="./edit-client.php"><BUTTON TYPE=button> Edit another client </BUTTON></A><P>
<A HREF="./main.php"><BUTTON TYPE=button> Return to main page </BUTTON></A><P>
<A HREF="./logout.php"><BUTTON TYPE=button> Logout </BUTTON></A>

<?php
include "./footer.php";
?>
