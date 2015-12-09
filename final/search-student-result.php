<?php
// File: search-student-result.php
// Copyright (C) 2012 WoodDuck Computer Consulting

include "./header.php";
get_globals();
my_connect();

echo "<H3>Search for Clients</H3>\n";

// Fetch field and searchstring from the FORM POST data
$field         = $_POST['field'];
$StudentName      = $_POST['studentName'];
$SchoolName      = $_POST['schoolName'];
$ClassName      = $_POST['className'];
decho("Searching field '$StudentName' for string '$Schoolname' ... <BR>");


// Do a SELECT query matching the field
echo "<B>Results of this search are:</B>\n<P>\n";

/* ----------------IMPORTANT NOTE ------------------------------
   =============================================================

Please look at the sql file in the gdrive, I based these queries off of them

I am not sure where the $field value comes from though (might want to refer to the original file
"search-client.php and search-client-result.php")

$field         = $_POST['field'];
$searchstring  = $_POST['searchstring'];
*/
//Update these queries later
/*
$query = "SELECT ID,FName,MName,LName from clients WHERE $field LIKE '%$searchstring%'";
$result = try_query($query);
show_client_list($result);
*/
my_disconnect();

?>

<P>
<A HREF="search.html"><BUTTON TYPE=button> Search again </BUTTON></A><P>
<A HREF="home.html"><BUTTON TYPE=button> Return to main page </BUTTON></A><P>
<A HREF="./logout.php"><BUTTON TYPE=button> Logout </BUTTON></A>

<?php
include "./footer.php";
?>
