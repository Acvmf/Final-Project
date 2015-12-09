<?php
// File: show-clients.php
// Copyright (C) 2012 WoodDuck Computer Consulting

include "./header.php";
get_globals();
my_connect();

show_client_list_all();

my_disconnect();

?>

<P>
<A HREF="./add-client.php"><BUTTON TYPE=button> Add A Client </BUTTON></A><P>
<A HREF="./edit-client.php"><BUTTON TYPE=button> Edit A Client </BUTTON></A><P>
<A HREF="./delete-client.php"><BUTTON TYPE=button> Delete A Client </BUTTON></A><P>
<A HREF="./main.php"><BUTTON TYPE=button> Return to main page </BUTTON></A><P>
<A HREF="./logout.php"><BUTTON TYPE=button> Logout </BUTTON></A>

<?php
include "./footer.php";
?>
