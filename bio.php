<html>
<body>
<?php
$author = simplexml_load_file('persons/' . $_GET['u'] . '.xml');
echo $author->data[0]->name;
echo $author->data[0]->bio;
?>
</body>
</html>
