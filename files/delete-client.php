<?php
// File: delete-client.php
// Copyright (C) 2012 WoodDuck Computer Consulting

include "./header.php";
get_globals();
my_connect();

echo "<H3>Delete client</H3>\n"; 
echo "<B>The client list is:</B>\n<P>\n";

show_client_list_all();

my_disconnect();

?>

<FORM ACTION="./delete-client-confirm.php" METHOD=post>
<P>
<B>Delete this client:</B>
<P>
Client ID = <INPUT TYPE=text NAME=ID>
<P>
<INPUT TYPE=submit VALUE="   DELETE this client   "><P>
<INPUT TYPE=reset VALUE="   Clear this form   "><P>
<A HREF="./main.php"><BUTTON TYPE=button> CANCEL (Return to main page) </BUTTON></A><P>
<A HREF="./logout.php"><BUTTON TYPE=button> Logout </BUTTON></A>

</FORM>

<?php
include "./footer.php";
?>
