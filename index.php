<?php
//required files
require_once 'login.php';
require_once 'settings.php';
require_once 'styles.php';

//setup mySQL connection
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if(!$db_server) die("Something went wrong. Check your installation of mySQL and the info you provided in login.php. For developers, here's what happened: " . mysql_error());

//start HTML headers
echo '<html>';
echo '<header>';
//add any header information you need such as Google Analytics tracking
echo '</header>';

//start body
echo '<body>';
echo "<h1>" . $cf_title . "</h1><br />";
echo "<h2>" . $cf_caption . "</h2><br />";
echo '<hr />';
echo '<br /><br />';

//start posts
//initialize connection
mysql_select_db($db_database) or die("Something went wrong. Check that you set up your database correctly and you provided the correct name in login.php. For the developers: " . mysql.error());
$query = "SELECT * FROM posts";
$result = mysql_query($query);
if (!$result) die("No posts found.");
if (mysql_num_rows($result) <= $cf_hp_visposts)
{
  $rows = mysql_num_rows($result);
}
else
{
  $rows = $cf_hp_visposts;
}
for ($j = 0 ; $j < $rows ; ++$j)
{
  echo '<h3>' . mysql_result($result,$j,'title') . '</h3><br />';
  echo '<p>' . mysql_result($result,$j,'content') . '</p><br /><br />';
}

//begin footer of visible page
echo '<hr />';
echo $cf_legal . '<br /><br />';
echo 'Developed with <a href=\"github.com/ARMmaster17/DynaPage/\">DynaPage</a>';

//end body
echo '</body>';

//open footer
echo '<footer>';
//add footer here. Ex: advanced page load timing JS snippet
echo '</footer>';

//close HTML tag
echo '</html>';

//end page
?>
