<?php
//required files
//require_once 'sqldata.php';
require_once 'settings.php';
require_once 'styles.php';


//start HTML headers
echo '<html>';
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

//start posts
$postdata = simplexml_load_file('posts/index.xml');
$numposts = count($postdata->post);
$startindex = $numposts - 1;
$rows = $cf_hp_visposts;
for ($i = $startindex; $i >= 0; $i--)
{
  echo '<h3>' . $postdata->post[$i]->title . '</h3>';
  echo '<h5>' . $postdata->post[$i]->data . '</h5>';
  $fh = fopen('posts/' . $postdata->post[$i]->content, 'r');
  echo '<p>' . fread($fh, filesize('posts/' . $postdata->post[$i]->content)) . '</p><br />';
  fclose($fh);
}

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
