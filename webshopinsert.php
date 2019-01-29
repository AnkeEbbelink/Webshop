<?php




$productnaam = $_POST['productnaam'];
$productprijs = $_POST['productprijs'];

try{
$conn = new PDO("mysql:host=localhost;dbname=webshopdb","root", "");
$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




$statement = $conn ->prepare('INSERT INTO producten (naam, prijs) VALUES (:fnaam ,:fprijs )');

$statement ->execute([
    'fnaam'=> $productnaam,
    'fprijs'=> $productprijs

    ]);

}

catch(PDOExeption $e) {
    echo "connection failed: " . $e ->getMessage();

}
$conn=Null;

header ("location: index.php");
?>
