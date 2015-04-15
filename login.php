<?php
require_once 'header.php';
?>
<h3>Sign in</h3>
<form action="action_page.php" method="POST">
<p>Username: </p>
<input type="text" name="uname">
<br />
<p>Password:</p> </p>
<input type="password" name="pword">
<br />
<br />
<hr />
<input type="submit" value="Log in">
</form>
<?php
require_once 'footer.php';
?>
