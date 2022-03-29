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
<header class="header-info">
		<h1>Company</h1>
		<!-- hieronder wordt het menu opgehaald. -->
		<?php
			include "nav.html";
		?>
	</header>
 
    <main class="main-info">
<?php

// hieronder een overzicht van categorieën met gemiddelde prijzen

require_once("dbconnect.php");

$query = $db-> prepare("SELECT idtype, AVG(price) FROM `type` INNER JOIN `product` ON type.idtype = product.typeid GROUP BY idtype;");
$query->execute();
$resultq = $query->fetchALL(PDO::FETCH_ASSOC);

echo"<table>";
echo"<thead><th>categorie</th><th>gemiddelde prijs</th></thead>";
echo"<tbody>";


foreach ($resultq as $data){
    echo"<tr>";      
    echo"<td>".$data["idtype"]."</td>";
    echo"<td>".$data["AVG(price)"]."</td>";
    echo"</tr>";
 
}

echo"</tbody>";
echo"</table>";

    ?> 
</main>
</body>
</html>

















