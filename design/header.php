<?php
//required files
//require_once 'sqldata.php';
//require_once SCRIPT_ROOT . '/admin/settings.php';
require_once './admin/settings.php'
require_once './styles.php';


//start HTML headers
echo '<html>';
echo '<header>';
echo '<LINK href=\"' . $st_home . '\" rel="stylesheet" type="text/css">';
echo '<title>' . $cf_title . '- Built with DynaPage</title>';
//add any header information you need such as Google Analytics tracking
echo '</header>';

//start body
if(!$st_bodyimage)
{
  echo '<body>';
}
else
{
  echo '<body style=\"background-image:url(' . $st_bodyimage . ')\">';
}
if(!$st_headerimage)
{
  echo "<h1>" . $cf_title . "</h1>";
  echo "<h2>" . $cf_caption . "</h2>";
  echo '<hr />';
  echo '<br /><br />';
}
else
{
  //TODO: finish call to create header image from media source listed in settings.php
  //echo "<img src=\"" . $st_headerimage . ""\" alt="Mountain View" style="width:304px;height:228px">"
}
?>
