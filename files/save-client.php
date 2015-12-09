<?php
// File: save-client.php
// Copyright (C) 2012 WoodDuck Computer Consulting

include "./header.php";
get_globals();
my_connect();

echo "<H3>Saving Client Data</H3>\n";

// Fetch data from the FORM POST data
$ID         = $_POST['ID'];
$FName      = $_POST['FName'];
$MName      = $_POST['MName'];
$LName      = $_POST['LName'];

// Do an UPDATE query to modify the client record

$query = "UPDATE clients SET FName='$FName',MName='$MName',LName='$LName' WHERE ID = '$ID'";
$result = try_query($query);

// Do a SELECT query to get the saved client data
$query = "SELECT ID,FName,MName,LName from clients WHERE ID = '$ID'";
$result = try_query($query);

// Display updated client data
echo "<B>Updated Client Data:</B>\n";
show_client_result($result);

my_disconnect();

?>

<P>
<A HREF="./edit-client.php"><BUTTON TYPE=button> Edit another client </BUTTON></A><P>
<A HREF="./main.php"><BUTTON TYPE=button> Return to main page </BUTTON></A><P>
<A HREF="./logout.php"><BUTTON TYPE=button> Logout </BUTTON></A>

</FORM>
<?php
include "./footer.php";
?>
