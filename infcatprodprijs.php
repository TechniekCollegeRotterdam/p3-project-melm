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

// hieronder een overzicht van categorieën met bijbehorende producten boven 100 EUR

require_once("dbconnect.php");

$query = $db-> prepare("SELECT idpurchase, pricecharged FROM `purchaseline` WHERE pricecharged > '100.00';");
SELECT idtype, name, price FROM `type` INNER JOIN `product` ON type.idtype = product.idtype WHERE price > '100';
$query->execute();
$resultq = $query->fetchALL(PDO::FETCH_ASSOC);
foreach ($resultq as $data){
    echo "prijs: " . $data["pricecharged"];
    echo"<br>";
    echo "categorie " . $data["idpurchase"];
    echo"<br>";
    echo"<br>";

}
    ?> 
</body>
</html>