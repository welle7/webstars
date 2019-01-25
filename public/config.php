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

$salt = "DasistSalz,wasdasPasswortebensalztund_dasabernichtzuwenig__ztgk688nmbfdr";


//Datenbank connect
$mysqli = new mysqli("localhost", "root", "", "webstars");
if ($mysqli->connect_errno) {
$sqlerror= "Verbindung fehlgeschlagen: " . $mysqli->connect_error;
}
?>