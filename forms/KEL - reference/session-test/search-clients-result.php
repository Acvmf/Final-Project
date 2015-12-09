<?php
// File: search-clients-result.php
// Copyright (C) 2012 WoodDuck Computer Consulting

include "./header.php";
get_globals();
my_connect();

echo "<H3>Search for Clients</H3>\n";

// Fetch field and searchstring from the FORM POST data
$field         = $_POST['field'];
$searchstring  = $_POST['searchstring'];
decho("Searching field '$field' for string '$searchstring' ... <BR>");

// Do a SELECT query matching the field
echo "<B>Results of this search are:</B>\n<P>\n";
$query = "SELECT ID,FName,MName,LName from clients WHERE $field LIKE '%$searchstring%'";
$result = try_query($query);
show_client_list($result);

my_disconnect();

?>

<P>
<A HREF="./search-clients.php"><BUTTON TYPE=button> Search again </BUTTON></A><P>
<A HREF="./main.php"><BUTTON TYPE=button> Return to main page </BUTTON></A><P>
<A HREF="./logout.php"><BUTTON TYPE=button> Logout </BUTTON></A>

<?php
include "./footer.php";
?>
