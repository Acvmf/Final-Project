<?php
// File: edit-client.php
// Copyright (C) 2012 WoodDuck Computer Consulting

include "./header.php";
get_globals();
my_connect();

echo "<H3>Edit Client Data</H3>\n"; 
echo "<B>The client list is:</B>\n<P>\n";

show_client_list_all();

my_disconnect();

?>

<FORM ACTION="./edit-client-result.php" METHOD=post>
<P>
<TABLE BORDER=0 CELLSPACING=3 CELLPADDING=3>
 <TR><TD ALIGN=right>Client ID to edit = </TD><TD><INPUT TYPE=text NAME=ID></TD></TR>
</TABLE>
<P>
<INPUT TYPE=submit VALUE="   EDIT this client   "><P>
<A HREF="./main.php"><BUTTON TYPE=button> CANCEL (Return to main page) </BUTTON></A><P>
<A HREF="./logout.php"><BUTTON TYPE=button> Logout </BUTTON></A>

</FORM>

<?php
include "./footer.php";
?>
