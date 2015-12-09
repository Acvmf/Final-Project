<?php
// File: add-client.php
// Copyright (C) 2012 WoodDuck Computer Consulting

include "./header.php";
get_globals();
my_connect();

echo "<H3>Add client</H3>\n"; 
echo "<B>The existing client list is:</B>\n<P>\n";

show_client_list_all();

my_disconnect();

?>

<FORM ACTION="./add-client-result.php" METHOD=post>
<P>
<B>Enter New Client data:</B><P>

<TABLE BORDER=0 CELLSPACING=3 CELLPADDING=3>
 <TR><TD ALIGN=right>First Name = </TD> <TD><INPUT TYPE=text NAME=FName></TD></TR>
 <TR><TD ALIGN=right>Middle Name = </TD><TD><INPUT TYPE=text NAME=MName></TD></TR>
 <TR><TD ALIGN=right>Last Name = </TD>  <TD><INPUT TYPE=text NAME=LName></TD></TR>
</TABLE>
<P>
<INPUT TYPE=submit VALUE="   ADD this client   "><P>
<INPUT TYPE=reset VALUE="   Clear this form   "><P>
<A HREF="./main.php"><BUTTON TYPE=button> CANCEL (Return to main page) </BUTTON></A><P>
<A HREF="./logout.php"><BUTTON TYPE=button> Logout </BUTTON></A>

</FORM>

<?php
include "./footer.php";
?>
