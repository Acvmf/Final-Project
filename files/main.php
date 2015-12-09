<?php
// File: main.php
// Copyright (C) 2012 WoodDuck Computer Consulting

include "./header.php";
get_globals();

?>

<H3>Main page.  Please choose from the following actions:</H3>

<A HREF="./show-clients.php"><BUTTON TYPE=button> Show All Clients </BUTTON></A><P>
<A HREF="./search-clients.php"><BUTTON TYPE=button> Search Client List </BUTTON></A><P>
<A HREF="./add-client.php"><BUTTON TYPE=button> Add A Client </BUTTON></A><P>
<A HREF="./edit-client.php"><BUTTON TYPE=button> Edit A Client </BUTTON></A><P>
<A HREF="./delete-client.php"><BUTTON TYPE=button> Delete A Client </BUTTON></A><P>
<A HREF="./logout.php"><BUTTON TYPE=button> Logout </BUTTON></A>

<?php
include "./footer.php";
?>
