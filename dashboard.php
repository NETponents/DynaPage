<?php
//require 'cklogin.php';
require 'styles.php';
require 'settings.php';
//require 'sqldata.php';

//Blocked out for dev purposes. Uncomment when login branch is merged
//if(isloggedin() != 0)
//{
//  echo "<html><body>FORBIDDEN</body></html>";
//}
//else if(accessLevel() < $sc_adminPanel)
//{
//  echo "<html><body>FORBIDDEN</body></html>";
//}
//else
//{
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
echo "<table border=\"1\" style=\"width:100%\">";
$dir = $cf_rooturl . "/admin/modules/";
$dh  = opendir($dir);
while (false !== ($filename = readdir($dh)))
{
    if($filename == ".")
    {
      //do nothing, this is a linux folder pointer and will cause an error
    }
    else if($filename == "..")
    {
      //do nothing, this is a linux folder pointer and will cause an error
    }
    else
    {
      //echo "<tr><td><iframe src=\"" . $dir . $filename . "\"></iframe></td></tr>";
      echo "<tr><td>";
      include $dir . $filename;
      echo "</td></tr>";
    }
}
echo "</table>";
//end admin content
echo '<hr />';
echo $cf_legal . '<br />';
echo 'Developed with <a href=\"github.com/ARMmaster17/DynaPage/\">DynaPage</a>';
echo "</body></html>";
//}
?>
