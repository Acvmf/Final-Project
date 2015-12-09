<?php
// File: delete-client-result.php
// Copyright (C) 2012 WoodDuck Computer Consulting

include "./header.php";
get_globals();
my_connect();

echo "<H3>Delete Client</H3>\n";

// Fetch client data from the FORM POST data
$ID         = $_POST['ID'];
decho("Deleting client '$ID' ... <BR>");

// Do a DELETE query
$query = "DELETE FROM clients WHERE ID = '$ID'";
$result = try_query($query);

// Note: should check the result for success...

// Verify the deletion
echo "<B>After this deletion the client list is:</B>\n<P>\n";
show_client_list_all();

my_disconnect();

?>

<P>
<A HREF="./delete-client.php"><BUTTON TYPE=button> Delete another client </BUTTON></A><P>
<A HREF="./main.php"><BUTTON TYPE=button> Return to main page </BUTTON></A><P>
<A HREF="./logout.php"><BUTTON TYPE=button> Logout </BUTTON></A>

<?php
include "./footer.php";
?>
