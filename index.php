<?php
//required files
require_once 'login.php'

//setup mySQL connection
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if(!$db_server) die("Something went wrong. Check your installation of mySQL and the info you provided in login.php. For developers, here's what happened: " . mysql_error());
mysql_select_db($db_database_posts) or die("Something went wrong. Check that you set up your database correctly and you provided the correct name in login.php. For the developers: " . mysql.error());

//show title

?>
