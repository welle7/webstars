<?php
$out = "";
require('public/config.php');
include($inc .'header.php');
//get variable setzten für Pagination
if (!isset($_GET['start']) or !is_numeric($_GET['start'])) {
    $start = 0;
  } else {
    $start = (int)$_GET['start'];
  }
//start query
$sql = "SELECT id, titel, sprache, inhalt FROM content LIMIT $start, 2";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
    // Zeilenweise Ausgabe mit while
    while($row = $result->fetch_assoc()) {
        $out.= "<h2>". $row["titel"]. "</a></h2>" . 
        "<pre><code class='language-" . $row["sprache"]. "'>" . $row["inhalt"]. "</code></pre>";
    }
    //pagination  achtung Schritte, z.B ($start+10)
    //Weiter blättern
    $out.='<a href="'.$_SERVER['PHP_SELF'].'?start='.($start+2).'">Weiter</a>';
    //zurück blättern
    $prev = $start - 2;
    if ($prev >= 0)
    $out.='<a href="'.$_SERVER['PHP_SELF'].'?start='.$prev.'">Zurück</a>';
} else {
    $out.= "Keine Resultate";
}
$mysqli->close();
$out.= "</div>";
echo $out;
include($inc .'footer.php');
?>