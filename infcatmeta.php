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

//hieronder een overzicht van alle categorieën met een a in de naam

require_once("dbconnect.php");

$query = $db-> prepare("SELECT name FROM `type` WHERE name LIKE '%R%';");
$query->execute();
$resultq = $query->fetchALL(PDO::FETCH_ASSOC);

echo "<table>";
echo "<thead><th>Namen met een R</th></thead>";
echo "<tbody>";

foreach ($resultq as $data){
    echo "<tr>";
    echo "<td>".$data["name"]."</td>";
    echo "</tr>";

}

echo "</tbody>";
echo "</table>";

    ?> 
</body>
</html>