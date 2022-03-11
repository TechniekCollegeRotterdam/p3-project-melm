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

// hieronder een overzicht van categorieën met gemiddelde prijzen

require_once("dbconnect.php");

$query = $db-> prepare("SELECT idtype, AVG(price) FROM `type` INNER JOIN `product` ON type.idtype = product.typeid GROUP BY idtype;");
$query->execute();
$resultq = $query->fetchALL(PDO::FETCH_ASSOC);
foreach ($resultq as $data){
    echo"<br>";
    echo"<br>";      
    echo "categorie: " . $data["idtype"];
    echo"<br>";
    echo "gemiddelde prijs EUR " . $data["AVG(price)"];
    echo"<br>";
 

}
    ?> 
</body>
</html>




















