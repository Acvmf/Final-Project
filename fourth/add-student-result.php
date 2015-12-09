<?php
// File: add-student-result.php
// Copyright (C) 2012 WoodDuck Computer Consulting

include "./header.php";
get_globals();
my_connect();

echo "<H3>Add Client</H3>\n";

// Fetch field and searchstring from the FORM POST data
$StudentName      = $_POST['studentName'];
$SchoolName      = $_POST['schoolName'];
decho("Adding client '$StudentName' '$SchoolName' ... <BR>");

// Do an INSERT query.  Order of columns and data must match
/* ----------------IMPORTANT NOTE ------------------------------
   =============================================================

Please look at the sql file in the gdrive, I based these queries off of them

*/
// Update these queries later
// For SID, either remove it entirely or find a way to assign them
$query = "INSERT INTO Student (SID,sname,school) VALUES ('1','$StudentName','$SchoolName')";
$result = try_query($query);

// Note:  should check result for success...

// Display resulting list
echo "<B>This addition is:</B>\n<P>\n";
/* Update these queries later, I am not sure what these things are suppose to do
$query = "SELECT ID,FName,MName,LName from clients WHERE FName = '$FName' AND MName = '$MName' AND LName = '$LName'";
$result = try_query($query);
show_client_list_result($result);
*/
my_disconnect();

?>

<P>
<A HREF="create_student.html"><BUTTON TYPE=button> Add another client </BUTTON></A><P>
<A HREF="search.html"><BUTTON TYPE=button> Show All Clients </BUTTON></A><P>
<A HREF="home.html"><BUTTON TYPE=button> Return to main page </BUTTON></A><P>
<A HREF="./logout.php"><BUTTON TYPE=button> Logout </BUTTON></A>

<?php
include "./footer.php";
?>
