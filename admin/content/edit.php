<?php

require('../../public/config.php');
include($inc .'header.php');
$out ='<div class="wrapper">';
$out.="<h2>Snippets ändern oder Löschen</h2>";
if(!isset($_GET['edit'])){
//Zeige alle Datensätze 
$sql = "SELECT id, titel, datum FROM content";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
    // Zeilenweise Ausgabe mit while
    $out.="<table>\n";
    while($row = $result->fetch_assoc()) {
        $out.= "<tr><td> ID: " . $row["id"] . "</td><td>" . $row["titel"] . 
        "</td><td>" . $row["datum"]. 
        "</td><td><a href='?del=". $row["id"] . "'>löschen </a>
        </td><td><a href='?edit=". $row["id"] . "'>edieren</a>
        </td></tr>\n";
    }
    $out.="</table>\n";
} else {
    $out.= "Keine Resultate";
}
}
//Datensatz löschen
//Get Variable zum lösche siehe Link oben *<a href='?del=". $row["id"] . "'>löschen </a>*
if(isset($_GET['del'])){
    $stmt = $mysqli->prepare("DELETE FROM content WHERE id = ?");
    $stmt->bind_param('i', $_GET['del']);
    $stmt->execute(); 
    $stmt->close();
}
//Datensatz edieren
//Zuerst Datensatz in Formularfelder einlesen.
if(isset($_GET['edit'])){
    $id= $_GET['edit'];
    $sql = "SELECT titel, sprache, inhalt FROM content WHERE id = $id";
    $result = $mysqli->query($sql);
if ($result->num_rows > 0) {
    // Zeilenweise Ausgabe mit while
    if (!isset($_POST['edieren'])) {
    $out.="<form action='#' method='POST'>\n";
    while($row = $result->fetch_assoc()) {
        $out.= "<input type='text' name='titel' value='" . $row["titel"] . 
        "'>\n<input type='text' name='sprache' value='" . $row["sprache"] .
        "'>\n<textarea name ='content' cols='35' rows='8'>" . $row["inhalt"]. 
        "\n</textarea>\n<input type='submit' name='edieren' value='edieren'>";
    }
}
    $out.="</form>\n";
    if (isset($_POST['edieren'])) {
       $titel = $_POST['titel'];
       $sprache = $_POST['sprache'];
       $inhalt = $_POST['content'];

       $sql = $mysqli->prepare("UPDATE content SET titel=?, sprache=?, inhalt=? WHERE ID=?");
       $sql->bind_param('sssi', $titel, $sprache, $inhalt, $id);
       $results =  $sql->execute();
       if($results){
           $out.= 'Der Datensatz wurde neu gespeichert.'; 
       }else{
           $oput.= 'Error : ('. $mysqli->errno .') '. $mysqli->error;
       }
        //$sql = "UPDATE titel, sprache, inhalt FROM content WHERE id = $id";
    }
    
} else {
    $out.= "Keine Resultate";
}
}

$out.="</div>";
echo $out;
include($inc .'footer.php');
?>