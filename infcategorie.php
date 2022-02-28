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

//hieronder een overzicht van alle categorieën van de producten

require_once("dbconnect.php");

$query = $db-> prepare("SELECT idtype FROM `product`;");
$query->execute();
$resultq = $query->fetchALL(PDO::FETCH_ASSOC);
foreach ($resultq as $data){
    echo "categorie: " . $data["idtype"];
    echo"<br>";
    echo"<br>";

}
    ?> 
</body>
</html>