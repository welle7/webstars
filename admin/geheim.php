<?php
session_start();
if ( !isset($_SESSION['user']) and $_SESSION['log'] != true )
{
    header("Location:index.php"); 
}
require('../public/config.php');
include($inc .'header.php');
$out = "<div class='wrapper'>";
$out.= "Hallo " .  $_SESSION['user'] . " Du bist eingeloggt";
$out.= "<p><a href='logout.php'>Log Out</a></p>";
$out.= "</div>";
echo $out;
include($inc .'footer.php');
?>