<?php
// File: show-students.php
// Copyright (C) 2012 WoodDuck Computer Consulting

include "./header.php";
get_globals();
my_connect();

show_client_list_all();

my_disconnect();

?>

<P>
<A HREF="create_student.html"><BUTTON TYPE=button> Add A Client </BUTTON></A><P>
<A HREF="home.html"><BUTTON TYPE=button> Return to main page </BUTTON></A><P>
<A HREF="./logout.php"><BUTTON TYPE=button> Logout </BUTTON></A>

<?php
include "./footer.php";
?>
