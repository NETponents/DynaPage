<html>
<?php
require_once 'header.php';
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
