<?php
//Header design file with page name and CSS stuff
require_once 'design/header.php';

//Variable initialization
//Import posts data file
$postdata = simplexml_load_file('posts/index.xml');
//Number of posts created
$numposts = count($postdata->post);
//Number of rows allowed
$rows = $cf_hp_visposts;
//If the number of posts is greater than the allowed number of rows
if($numposts > $rows)
{
  //For each row allowed to create (as defined by settings)
  for ($i = 0; $i <= $rows; $i++)
  {
    echo '<h3>' . $postdata->post[$i]->title . '</h3>';
    echo '<h5>' . $postdata->post[$i]->data . '</h5>';
    $fh = fopen('posts/' . $postdata->post[$i]->content, 'r');
    echo '<p>' . fread($fh, filesize('posts/' . $postdata->post[$i]->content)) . '</p><br />';
    fclose($fh);
  }
}
//Else if the number of posts is less than the allowed number of posts
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
//Footer design file
require_once 'design/footer.php';
?>
