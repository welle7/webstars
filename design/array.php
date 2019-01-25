<?php
require('../public/config.php');
include($inc .'header.php');
$out = "<div class='wrapper'>";
 

//Arrays
$out.="<h2>Einfaches Array</h2>";
$blumen = array("Rose", "Tulpe", "Nelke", "Sonnenblume", "Krokus");
echo $blumen[2];

$out.="<ul>";
foreach ($blumen as $bern) {
    $out.= "<li>$bern</li>";
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