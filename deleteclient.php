<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <title>client verwijderen</title>
  <link rel="stylesheet" type="text/css" href="company.css">
</head>

<?php
include "nav.html";
?>

<?php
  try {
    $db = new PDO("mysql:host=localhost;dbname=melm", "root", ""); if(isset($_GET['idclient'])) {
        $query = $db->prepare("DELETE FROM client WHERE idclient = :idclient");
        $idclient = filter_input(INPUT_GET, "idclient", FILTER_SANITIZE_NUMBER_INT);
        $query->bindParam("idclient", $idclient);
        if($query->execute()) {
            echo "Klant is verwijderd.";
        } else {
            echo "Er is een fout opgetreden!";
        }
        echo "<br>";
    }  
} catch(PDOException $e) {
    die("Error!: " . $e->getMessage());
}

$query = $db->prepare("SELECT * FROM client");
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $data) {
    echo "<a href='?idclient=".$data['idclient']."'>";
    echo $data["givenname"] . " " . $data["surname"];
    echo "</a>";
    echo "<br>";
}
?>