<?php
session_start();
require('../public/config.php');
include($inc .'header.php');
$out = "<div class='wrapper'>";
//Wurde das Formular gesendet?
if(isset($_POST['submit'])){
    //Ist das Formular ausgefüllt?
    if ($_POST['username'] == '') {
       $out.= "<p>kein Username eingetragen</p>";
    }
    if ($_POST['passwort'] == '') {
        $out.= "<p>kein Passwort eingetragen</p>";
     }
     //User
    $passwort = $_POST['passwort'];
    $passwort = hash('sha256', $salt.$passwort);
    $username = $_POST['username'];

  // Mysql connection mit prepare Statement vorbereiten
  $stmt = $mysqli->prepare('SELECT user_id FROM user WHERE passwort = ? AND username = ?');
  $stmt->bind_param("ss", $passwort, $username);
  // ausführen
  $stmt->execute();
  $stmt->bind_result($user_id );
  if (!empty($stmt->fetch())) {
    $result = $stmt -> get_result();

    //wenn das fetch nicht leer ist, haben wir ein Resultat. Somit stimmt der Passwort-Hash
    //Setzen wir nach erfolgreichem Login eine Session
    $_SESSION['user'] = $_POST['username'];
    $_SESSION['log'] = true;
    $out.= "Hallo " .  $_SESSION['user'] . " Du bist eingeloggt <br> <a href='logout.php'>Logout</a>";
  } else
  //wenn das fetch leer ist, haben wir kein Resultat. Somit stimmt der Passwort-Hash nicht
  //zurück auf Feld 1

  //header("Location:index.php");
  $out.="<h3>Passwort oder Username falsch! Zurück zu 
  <a href='index.php'>Login</a></h3>";
$mysqli->close();
}
if(empty($_POST)) {
 //header("Location:index.php");
 $out.="<h3>Passwort oder Username nicht ausgefüllt! Zurück zu 
  <a href='index.php'>Login</a></h3>";
}
$out.= "</div>";
echo $out;
include($inc .'footer.php');
?>