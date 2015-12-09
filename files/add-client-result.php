<?php
// File: add-client-result.php
// Copyright (C) 2012 WoodDuck Computer Consulting

include "./header.php";
get_globals();
my_connect();

echo "<H3>Add Client</H3>\n";

// Fetch field and searchstring from the FORM POST data
$FName      = $_POST['FName'];
$MName      = $_POST['MName'];
$LName      = $_POST['LName'];
decho("Adding client '$FName' '$MName' '$LName' ... <BR>");

// Do an INSERT query.  Order of columns and data must match
$query = "INSERT INTO clients (FName,MName,LName) VALUES ('$FName','$MName','$LName')";
$result = try_query($query);

// Note:  should check result for success...

// Display resulting list
echo "<B>This addition is:</B>\n<P>\n";
$query = "SELECT ID,FName,MName,LName from clients WHERE FName = '$FName' AND MName = '$MName' AND LName = '$LName'";
$result = try_query($query);
show_client_list_result($result);

my_disconnect();

?>

<P>
<A HREF="./add-client.php"><BUTTON TYPE=button> Add another client </BUTTON></A><P>
<A HREF="./show-clients.php"><BUTTON TYPE=button> Show All Clients </BUTTON></A><P>
<A HREF="./main.php"><BUTTON TYPE=button> Return to main page </BUTTON></A><P>
<A HREF="./logout.php"><BUTTON TYPE=button> Logout </BUTTON></A>

<?php
include "./footer.php";
?>
