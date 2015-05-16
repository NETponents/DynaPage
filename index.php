<header>
    <title>Thinkit - Official Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</header>
<body>
<?php
//Header design file with page name and CSS stuff
define( 'SCRIPT_ROOT', 'http://localhost/DynaPage' );
require_once './design/header.php';

//Variable initialization
//Import posts data file
$postdata = simplexml_load_file('./posts/index.xml');
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
    echo '<div class=\"row\">';
    echo '<div class=\"col-sm-2\">';
    echo '<h1>' . $postdata->post[$i]->title . '</h1>';
    echo '<p>' . $postdata->post[$i]->data . '</p>';
    echo '</div><div class=\"col-sm-10\">';
    $fh = fopen('posts/' . $postdata->post[$i]->content, 'r');
    echo '<p>' . fread($fh, filesize('./posts/' . $postdata->post[$i]->content)) . '</p><br />';
    fclose($fh);
    echo '</div>';
    echo '</div>';
  }
}
//Else if the number of posts is less than the allowed number of posts
else
{
  for ($i = 0; $i < $numposts; $i++)
  {
    echo '<div class=\"row\">';
    echo '<div class=\"col-sm-2\">';
    echo '<h1>' . $postdata->post[$i]->title . '</h1>';
    echo '<p>' . $postdata->post[$i]->data . '</p>';
    echo '</div><div class=\"col-sm-10\">';
    $fh = fopen('posts/' . $postdata->post[$i]->content, 'r');
    echo '<p>' . fread($fh, filesize('./posts/' . $postdata->post[$i]->content)) . '</p><br />';
    fclose($fh);
    echo '</div>';
    echo '</div>';
  }
}
//Footer design file
require_once './design/footer.php';
?>
</body>
