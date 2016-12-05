<?php
session_start();

if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['userName'])){


       echo '<p>You are currently <strong>logged in.</strong></p>',"\n";
       echo '<p><a href="/logout.php">Log out</a></p>',"\n";
}
else
{

	echo '<html>',"\n"; 
	echo '<head>',"\n";
	echo '<title>Sign-In</title>',"\n"; 
	echo '<link rel="stylesheet" type="text/css" href="style-sign.css">',"\n";
	echo '</head>',"\n"; 
	echo '<body id="body-color">',"\n"; 
	echo '<div id="Sign-In">',"\n";
	echo '<fieldset style="width:30%"><legend>LOG-IN HERE</legend>',"\n";
	echo '<form method="POST" action="connectivity.php"> User <br>',"\n";
	echo '<input type="text" name="user" size="40"><br>',"\n";
	echo 'Password <br><input type="password" name="pass" size="40"><br>',"\n";
	echo '<input id="button" type="submit" name="submit" value="Log-In">',"\n";
	echo '</form>',"\n";
	echo '</fieldset>',"\n";
	echo '</div>',"\n"; 
	echo '</body>',"\n";
	echo '</html>',"\n"; 
}
?>