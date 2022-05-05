<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht bestellingen</title>
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

//een overzicht van categorieën met ALLE bijbehorende producten.

require_once("dbconnect.php");

$query = $db-> prepare("SELECT productid, quantity, prodname FROM `purchaseline` INNER JOIN `product` ON productid = idproduct ORDER BY `purchaseline`.`quantity` DESC");
$query->execute();

$resultq = $query->fetchALL(PDO::FETCH_ASSOC);


foreach ($resultq as $data){
    echo " ProductId: " . $data["productid"];
    echo " Naam product: " . $data["prodname"];
    echo " Hoeveelheid verkocht: " . $data["quantity"];
    echo "<br>";
  
}

    ?> 
</main>
</body>
</html>