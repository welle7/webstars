<?php
require('../public/config.php');
include($inc .'header.php');
$out = "<div class='wrapper'>";
 

//Arrays
$out.="<h2>Einfaches Array</h2>";
$blumen = array("Rose", "Tulpe", "Nelke", "Sonnenblume");
$out.="<ul>";
foreach ($blumen as $blume) {
    $out.= "<li>$blume</li>";
}
$out.= "<ul>";

$out.="<h2>assoziatives Array</h2>";
$blumen2 = array("rot"=>"Rose", "rosa"=>"Tulpe", "weiss"=>"Nelke", "gelb"=>"Sonnenblume");
foreach ($blumen2 as $farbe => $blume2) {
    $out.= "Eine $blume2 ist $farbe<br>";
}

$out.= "</div>";
echo $out;
include($inc .'footer.php');
?>