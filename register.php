<?php
//open HTML tag
echo '<html>';
echo '<body>';

echo '<form method=\"post\" action=\"validate.php\" onsubmit=\"clean()\">';
echo 'Username: <input type=\"text\" name=\"user\" />';
echo '<br /> Password: <input type=\"password\" name=\"pass\" />';
echo '<br /> <input type=\"submit\" value=\"Log in\" /></form>';
?>
