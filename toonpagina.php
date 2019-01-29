


<?php

if(isset ($_GET ['naamfilter']))
{
    $naamfilter= $_GET ['naamfilter'];
}
else{
    $naamfilter = '';

}

// voorwaarden: pdo  ( niet met SQL, mysql (i))

// connectie database.
$conn = new PDO ("mysql:host=localhost;dbname=webshopdb","root", "");

// stuur SQL QUERY naar de database server
//$stmt = $conn->query('SELECT * FROM deelnemers');
// $stmt = $conn->query('SELECT * FROM deelnemers WHERE aantalkopjes >= 1');
$stmt = $conn->query("SELECT * FROM producten WHERE naam like '%$naamfilter%'");

// antwoord van databse server opvragen
// door het antwoord lopen,
while ($row= $stmt -> fetch()){
      echo "<LI>" . $row ['naam'] . " : " . $row ['prijs']; 
      echo "<a href='productverwijderen.php?productid=" . $row['id'] . "'> Verwijder</a>"; 
      echo "<a href='productwijzigen.php?productid=" . $row['id'] . "'> wijzigen</a>"; 
      echo "</li>";
}


//verbreek verbinding met database server.
$conn =null;

?>