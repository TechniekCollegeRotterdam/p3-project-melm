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

//een overzicht van categorieën met ALLE bijbehorende producten.

require_once("dbconnect.php");

$query = $db-> prepare("SELECT idtype, idproduct, prodname FROM `type` INNER JOIN `product` ON type.idtype = product.typeid GROUP BY idproduct;");
$query->execute();
$resultq = $query->fetchALL(PDO::FETCH_ASSOC);

echo"<table>";
echo"<thead><th>categorie</th><th>product id</th><th>productnaam</th></thead>";
echo"<tbody>";

foreach ($resultq as $data){
    echo"<tr>"; 
    echo"<td>".$data["idtype"]."</td>";
    echo"<td>".$data["idproduct"]."</td>";
    echo"<td>".$data["prodname"]."</td>";
    echo"</tr>";
  
}

echo"</tbody>";
echo"</table>";
    ?> 
</body>
</html>
