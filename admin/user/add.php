<?php
//Eingeloggt?
session_start();
if ( !isset($_SESSION['user']) and $_SESSION['log'] != true )
{
    header("Location:../index.php"); 
}
require('../../public/config.php');
include($inc .'header.php');
$out ='<div class="wrapper">';
//Wenn nicht gesendet, zeige Formular
if(!isset($_POST['senden'])) {
$out.= <<<DOC
	<h2>User erfassen</h2>
    <form action="#" method="POST" id="userform">
    <label for="vorname">Vorname</label>
    <input type="text" name="vorname" id="vorname">
    <label for="nachname">Nachname</label>
	<input type="text" name="nachname" id="nachname">
	<label for="username">Username</label>
    <input type="text" name="username" id="username">
    <label for="mail">E-Mail</label>
	<input type="email" name="mail" id="mail">
	<label for="passwort">Passwort</label>
    <input type="password" name="passwort" id="passwort">
    <label class="password-meter-label" for="password">Passwortstärke:</label>
    <div class="password-meter">
        <div class="password-meter-message">&nbsp;</div></div>
    <label for="passwort2">Passwort wiederholen</label>
	<input type="password" name="passwort2" id="passwort2">
	<input type="submit" name="senden">
</form>
</div>
DOC;
}
//Form wurde gesendet!  
if(isset($_POST['senden'])) {
    //Erzeuge ein Error Array & fülle Fehler ab
    $errors = array();
    //Prüfen ob Form ausgefüllt
    if ($_POST['vorname'] == "") {$errors[] = "Der Vorname fehlt.";}
    if ($_POST['nachname'] == "") {$errors[] = "Der Nachname fehlt.";}
    if ($_POST['username'] == "") {$errors[] = "Der Username fehlt.";}
    if ($_POST['mail'] == "") {$errors[] = "Die E-Mail Adresse fehlt.";}
    if ($_POST['passwort'] == "") {$errors[] = "Das Passwort fehlt.";}
    if ($_POST['passwort2'] == "") {$errors[] = "Das zweite Passwort fehlt.";}
    if ($_POST['passwort'] !=  $_POST['passwort2']) {$errors[] = "Passwörter stimmen nicht überein.";}
// Gibt es Errors -> dann Ausgeben
if (count($errors)) {
    $out.= "Ihre Daten konnten nicht bearbeitet werden:<br>" .
    //Pro Fehler eine neue Zeile
    implode("<br>", $errors);
    } 
else {
    // Formularinhalte vorbereiten
    $vorname = mysqli_real_escape_string($mysqli, $_POST['vorname']);
    $nachname = mysqli_real_escape_string($mysqli, $_POST['nachname']);
    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
    $mail = mysqli_real_escape_string($mysqli, $_POST['mail']);
    $passwort = $_POST['passwort'];
    $passwort = hash('sha256', $salt.$passwort);
    // prepare and bind 
    // Vorbereiten und Verknüpfen
    $stmt = $mysqli->prepare("INSERT INTO user (vorname, nachname, username, mail,passwort) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $vorname, $nachname, $username, $mail, $passwort);
    $stmt->execute();
    $stmt->close();
    $out.=" Alles eingetragen";
    }
}
echo $out;
include($inc .'adminfooter.php');
?>