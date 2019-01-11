<?php
// Pfade
$pfad = "/webstars/"; //hier Pfad angeben
$template = "public/assets"; //hier Design angeben
$server = "http://" . $_SERVER["HTTP_HOST"];
$url = $server . $pfad;
$css = $url . $template . "/css/screen.min.css";
$js = $url . $template . "/js/";
$media = $url . $template . "/media/";
$inc = $_SERVER['DOCUMENT_ROOT'] . $pfad . "public/inc/";

//Login
$user = "Andy";
$pass = "bern";
?>