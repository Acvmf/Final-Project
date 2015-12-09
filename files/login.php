<?php
// File: login.php
// Copyright (C) 2012 WoodDuck Computer Consulting

include "./header.php";
// Session globals aren't defined yet.
?>

<H3>Welcome to the Session Test.  Please login.</H3>

<FORM ACTION="./validate-login.php" METHOD="post">

<TABLE>
 <TR><TD ALIGN=right>Username:</TD><TD><INPUT TYPE=text NAME="username"></TD>    </TR>
 <TR><TD ALIGN=right>Password:</TD><TD><INPUT TYPE=password NAME="password"></TD></TR>
</TABLE>
<INPUT TYPE=submit VALUE="  Login  "><P>
<A HREF="http://www.google.com"><BUTTON TYPE=button> Get Me Out of Here!</BUTTON></A>

</FORM>

<?php
include "./footer.php";
?>
