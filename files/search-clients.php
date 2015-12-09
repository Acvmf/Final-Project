<?php
// File: search-clients.php
// Copyright (C) 2012 WoodDuck Computer Consulting

include "./header.php";
get_globals();

?>

<H3>Search Client List</H3>

<FORM ACTION="./search-clients-result.php" METHOD=post>

Search for clients by: 
<SELECT NAME=field>
	<OPTION VALUE="Fname">First Name</OPTION>
	<OPTION VALUE="Mname">Middle Name</OPTION>
	<OPTION VALUE="Lname">Last Name</OPTION>
</SELECT>
<P>
with this string:
<INPUT TYPE=text NAME=searchstring VALUE="search"> (blank to select all)
<P>
<INPUT TYPE=submit VALUE="   SEARCH   "><P>
<A HREF="./main.php"><BUTTON TYPE=button> CANCEL (Return to main page) </BUTTON></A><P>
<A HREF="./logout.php"><BUTTON TYPE=button> Logout </BUTTON></A>

</FORM>

<?php
include "./footer.php";
?>
