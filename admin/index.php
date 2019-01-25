<?php
require('../public/config.php');
include($inc .'header.php');
?>
<div class="wrapper">
	<h2>Login</h2>
<form action="login.php" method="POST">
	<label for="username">Username</label>
	<input type="text" name="username" id="username">
	<label for="passwort">Passwort</label>
	<input type="password" name="passwort" id="passwort">
	<input type="submit" name="submit">
</form>
</div>

<?php
echo "</div>";
include($inc .'footer.php');
?>