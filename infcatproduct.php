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

// hieronder een overzicht van categorieën met bijbehorende producten 

require_once("dbconnect.php");

$query = $db-> prepare("SELECT idtype, name FROM `type`;");
$query->execute();
$resultq = $query->fetchALL(PDO::FETCH_ASSOC);

echo"<table>";
echo"<thead><th>productnaam</th><th>categorie</th><thead>";

foreach ($resultq as $data){
    echo"<tr>";
    echo"<td>".$data["name"]."</td>";
    echo"<td>".$data["idtype"]."</td>";
    echo"</tr>";

}

echo"</tbody>";
echo"</table>";
    ?> 
</body>
</html>