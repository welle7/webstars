<?php
require('public/config.php');
include($inc .'header.php');


$out = "<h2>Hier ist ein Titel</h2>";
$out.= "<p>Das ist der Pfad zu CSS: $css</p>";
$out.= "<p>Das ist \"nochmal\" ein Absatz</p>";

echo $out;
include($inc .'footer.php');
?>