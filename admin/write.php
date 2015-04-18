<html>
<?php
require_once 'header.php';
?>
<form action="process.php" method="post">
  Title: <input type="text" name="title"><br>
  Content: <input type="text" name="content"><br>
  <input type="submit" value="Post">
</form>
<?php
require_once 'footer.php';
?>
