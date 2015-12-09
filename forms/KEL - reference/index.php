<!DOCTYPE HTML>

<HTML>

<?php
	include 'header.php';
?>
<DIV CLASS="body">
<BR><BR><BR><BR>

Welcome to the Login Page.<BR>Please enter your credentials below.

<FORM ACTION="./welcome.php" METHOD="POST">

<TABLE CLASS="table">
 <TR> <TD ALIGN=right>Username:</TD> <TD><INPUT TYPE=text NAME="name"></TD>     </TR>
 <TR> <TD ALIGN=right>Password:</TD> <TD><INPUT TYPE=password NAME="pswd"></TD> </TR>
 <TR> <TD ALIGN=right><A HREF="http://www.google.com"><BUTTON TYPE=button>Get Me Out of Here!</BUTTON></A></TD>
 <TD><INPUT TYPE=submit VALUE="  Login  "></TD> </TR>

</TABLE>
</FORM>
</DIV>
</HTML>

<?php
include "./footer.php";
?>






<!--
<BR><BR><BR><BR><BR>
<TABLE CLASS="table">
		<FORM ACTION="welcome.php" METHOD=POST> </FORM>
		<TR><TD>Username: </TD><TD><INPUT TYPE=TEXT NAME="name"></TD></TR>
			
		<TR><TD>Password: </TD><TD><INPUT TYPE=PASSWORD NAME="pswd"></TD></TR>
</TABLE>

<BR><BR>
		<CENTER><INPUT TYPE="submit" VALUE="   Go!   "></FORM><CENTER>

</DIV>
</HTML> --->