<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="company.css">
</head>
<body>
<?php

//een overzicht van categorieën met producten beneden de 5 EUR

require_once("dbconnect.php");

$query = $db-> prepare("SELECT idtype, prodname, price FROM `product` WHERE price < 5;");
$query->execute();
$resultq = $query->fetchALL(PDO::FETCH_ASSOC);
foreach ($resultq as $data){
    echo"<br>";    
    echo "categorie: " . $data["idtype"];
    echo"<br>";
    echo "productnaam " . $data["prodname"];
    echo"<br>";
    echo "prijs " . $data["price"];
    echo"<br>";
    echo"<br>";
}
    ?> 
</body>
</html>

