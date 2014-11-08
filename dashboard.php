<?php
require_once auth.php;
require_once styles.php;
require_once settings.php;
require_once sqldata.php;
if($isloggedin())
{
  echo "<html><body>FORBIDDEN</body></html>";
}
else if($isadmin())
{
  echo "<html><body>FORBIDDEN</body></html>";
}
else if($canaccesswebconsole())
{
  echo "<html><body>FORBIDDEN</body></html>";
}
else
{
//start loading page
echo "<html><head>";
echo '<LINK href=\"' . $st_home . '\" rel="stylesheet" type="text/css">';
//This is the place to add google analytics code
//echo

echo "</header><body>";
if(!$st_bodyimage)
{
  echo '<body>';
}
else
{
  echo '<body style=\"background-image:url(' . $st_bodyimage . ')\">';
}
echo "<h1>" . $cf_title . "</h1>";
echo "<h2>" . $cf_caption . "</h2>";
echo '<hr />';
echo '<br /><br />';
//start admin content
echo "<table>";
//$ar_addons = ;//file lookup in folder method
/*
for (string i in $ar_addons)
{
  echo "<tr>";
  require i;
  i.run();
  echo "</tr>";
}
*/
echo "</table>";
//end admin content
*/
echo '<hr />';
echo $cf_legal . '<br />';
echo 'Developed with <a href=\"github.com/ARMmaster17/DynaPage/\">DynaPage</a>';
echo "</body></html>";
}
?>
