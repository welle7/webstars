<?php
require('../public/config.php');
include($inc .'header.php');

$out = "<div class='wrapper'>";
$out.= "<h2>Hier ist ein Titel</h2>";
$out.= "<p>Das ist der Pfad zu CSS: $css</p>";
$out.= "<p>Das ist \"nochmal\" ein Absatz</p>";
echo $out;
?>

<pre>
<code class= "language-css">
@font-face {
    font-family: 'robotoregular';
    src: url("../fonts/roboto-regular-webfont.woff2") format("woff2"), url("../fonts/roboto-regular-webfont.woff") format("woff");
    font-weight: normal;
    font-style: normal;
</code>
</pre>


<?php
echo "</div>";
include($inc .'footer.php');
?>