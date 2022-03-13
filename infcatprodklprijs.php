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

//een overzicht van categorieën met producten beneden de 5 EUR.

require_once("dbconnect.php");

$query = $db-> prepare("SELECT idtype, prodname, price FROM `type` INNER JOIN `product` ON type.idtype = product.typeid WHERE price < 5;");
$query->execute();
$resultq = $query->fetchALL(PDO::FETCH_ASSOC);

echo"<table>";
echo"<thead><th>categorie</th><th>productnaam</th><th>prijs</th></thead>";
echo"<tbody>";

foreach ($resultq as $data){
    echo"<tr>";    
    echo"<td>".$data["idtype"]."</td>";
    echo"<td>".$data["prodname"]."</td>";
    echo"<td>".$data["price"]."</td>";
    echo"</tr>";

}

echo"</tbody>";
echo"</table>";
    ?> 
</body>
</html>

