<?php
session_start();
require('../public/config.php');
include($inc .'header.php');
$out = "<div class='wrapper'>";
//Wurde das Formular gesendet?
if(isset($_POST['submit']));{
    //Ist das Formular ausgefüllt?
    if ($_POST['username'] == '') {
       $out.= "<p>kein Username eingetragen</p>";
    }
    if ($_POST['passwort'] == '') {
        $out.= "<p>kein Passwort eingetragen</p>";
     }
     //User
     if ($_POST['username'] == $user && $_POST['passwort'] == $pass){
        $_SESSION['user'] = $_POST['username'];
        $_SESSION['log'] = true;
        $out.= "Hallo " .  $_SESSION['user'] . " Du bist eingeloggt";

     }
     else {$out.="Username oder Passwort falsch"; }
}
if(empty($_POST)) {
   header("Location:index.php");
}
$out.= "</div>";
echo $out;
include($inc .'footer.php');
?>