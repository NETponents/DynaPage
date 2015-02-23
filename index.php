<?php
require_once 'header.php';

//start posts
$postdata = simplexml_load_file('posts/index.xml');
$numposts = count($postdata->post);
$maxindex = $numposts - 1;
$rows = $cf_hp_visposts;
if($numposts > $rows)
{
  for ($i = 0; $i <= $rows; $i++)
  {
    echo '<h3>' . $postdata->post[$i]->title . '</h3>';
    echo '<h5>' . $postdata->post[$i]->data . '</h5>';
    $fh = fopen('posts/' . $postdata->post[$i]->content, 'r');
    echo '<p>' . fread($fh, filesize('posts/' . $postdata->post[$i]->content)) . '</p><br />';
    fclose($fh);
  }
}

else
{
  for ($i = 0; $i < $numposts; $i++)
  {
    echo '<h3>' . $postdata->post[$i]->title . '</h3>';
    echo '<h5>' . $postdata->post[$i]->data . '</h5>';
    $fh = fopen('posts/' . $postdata->post[$i]->content, 'r');
    echo '<p>' . fread($fh, filesize('posts/' . $postdata->post[$i]->content)) . '</p><br />';
    fclose($fh);
  }
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
