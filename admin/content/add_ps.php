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
	<h2>Snippet erfassen</h2>
    <form action="#" method="POST">
    <label for="titel">Titel:</label>
    <input type="text" name="titel" id="titel">
    <select name="sprache">
        <option value="html">HTML</option>
        <option value="css">CSS</option>
        <option value="scss">SCSS</option>
        <option value="php">PHP</option>
        <option value="javascript">JavaScript</option>
        <option value="sql">SQL</option>
</select>
    <label for="snippet">Snippet</label>
	<textarea id="snippet" name="snippet" cols="35" rows="4"></textarea>
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
    if ($_POST['titel'] == "") {$errors[] = "Der Titel fehlt.";}
    if ($_POST['snippet'] == "") {$errors[] = "Das snippet fehlt.";}
// Gibt es Errors -> dann Ausgeben
if (count($errors)) {
    $out.= "Ihre Daten konnten nicht bearbeitet werden:<br>" .
    //Pro Fehler eine neue Zeile
    implode("<br>", $errors);
    } 
else {
    // Formularinhalte vorbereiten
    $titel = mysqli_real_escape_string($mysqli, $_POST['titel']);
    $snippet = $_POST['snippet'];
    $sprache = mysqli_real_escape_string($mysqli, $_POST['sprache']);
    // Vorbereiten und Verknüpfen
    $stmt = $mysqli->prepare("INSERT INTO content (titel, sprache, inhalt) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $titel, $sprache, $snippet);
    $stmt->execute();
    $stmt->close();
    $out.=" Alles eingetragen";
    }
}
echo $out;
include($inc .'footer.php');
?>