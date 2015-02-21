<html>
<?php
require_once 'settings.php';
require_once 'styles.php';


//start HTML headers
echo '<header>';
echo '<LINK href=\"' . $st_home . '\" rel="stylesheet" type="text/css">';
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
<form action="process.php" method="post">
  Title: <input type="text" name="title"><br>
  Content: <input type="text" name="content"><br>
  <input type="submit">
</form>
<?php
//begin footer of visible page
echo '<hr />';
echo $cf_legal . '<br />';
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
