<html>
<body>
<p>Please wait...</p>
<?php
$text = '<post><title>' . $_POST['title'] . '</title><content>' . /*find last known post*/ . '</content><data>' . /*same as previous tag*/ . '</data><tag>' . /*same*/ . '</tag></post>';
$num_bytes = insert_into_file($content_path . '/index.xml', '<posts>', $text, true);

function insert_into_file($file_path, $insert_marker, $textx, $after = true)
{ 
  $contents = file_get_contents($file_path); 
  $new_contents = preg_replace($insert_marker,($after) ? '$0' . $textx : $textx . '$0', $contents); 
  return file_put_contents($file_path, $new_contents); 
} 
?>
