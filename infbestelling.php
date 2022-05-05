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

$query = $db-> prepare("SELECT * FROM `purchase`");
$query->execute();

$resultq = $query->fetchALL(PDO::FETCH_ASSOC);


foreach ($resultq as $data){
    echo " Product: " . $data["idpurchase"];
    echo " Datum " . $data["purchasedate"];
    echo " Betaald bedrag " . $data["paidamount"];
    echo " Datum wanneer volledig betaald " . $data["paidinfulldate"];
    echo " Aankomst datum " . $data["deliverydate"];
    echo " Client " . $data["clientid"];
    echo "<br>";
  
}

echo"</tbody>";
echo"</table>";
    ?> 
</main>
</body>
</html>