<?php
require('../public/config.php');
include($inc .'header.php');
$page = "accordeon";
?>

<dl class="accordion">

<dt><a href="">Panel 1</a></dt>
<dd>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</dd>

<dt><a href="">Panel 2</a></dt>
<dd>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</dd>

<dt><a href="">Panel 3</a></dt>
<dd>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</dd>

</dl>

<?php
include($inc .'footer.php');
?>