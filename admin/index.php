<?php
require('../public/config.php');
include($inc .'header.php');
?>
<div class="wrapper">
	<h2>Login</h2>
<form action="login.php" method="POST">
	<input type="text" name="username">
	<input type="password" name="passwort">
	<input type="submit" name="submit">
</form>
</div>

<?php
echo "</div>";
include($inc .'footer.php');
?>