<?php
require('../public/config.php');
include($inc .'header.php');

 //User
 $passwort = "admin";
echo "<h2>Das Passwort $passwort ist verschlüsselt =></h2>";
 $passwort = hash('sha256', $salt.$passwort);
 
echo "<h2>$passwort</h2 >";

include($inc .'footer.php');
?>