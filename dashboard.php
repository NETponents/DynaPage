<?php
require_once 'header.php';
//start admin content
echo "<table border=\"1\" style=\"width:100%\">";
$dir = "admin/modules/";
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
