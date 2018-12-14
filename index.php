<?php
require('public/config.php');
include($inc .'header.php');
?>

<video autoplay id='video' loop='loop' muted='muted' preload='auto'>
<source src='<?php echo $media; ?>service.mp4' type='video/mp4' />
<source src='<?php echo $media; ?>service.webm' type='video/webm' /> 

Sorry, your browser does not support HTML5 video.

</video>


<?php
echo "</div>";
include($inc .'footer.php');
?>