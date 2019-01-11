<?php
require('../public/config.php');
include($inc .'header.php');
?>

<div class='wrapper'>
<h2>Hier ist ein Titel</h2>

    <form action="#" method="post">
        <input type="text" name="eins" id="eins">
        <input type="text" name="zwei" id="zwei">
        <input type="submit" name="senden" id="senden" value="Ab die Post">
    </form>

<?php
if(isset($_POST['senden'])){
$eins = htmlspecialchars($_POST['eins']);
$zwei = htmlspecialchars($_POST['zwei']);
echo $eins . " " . $zwei;
}
?>
</div>
<?php
include($inc .'footer.php');
?>
