<<<<<<< HEAD
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

//een overzicht van categorieën met producten beneden de 5 EUR.

require_once("dbconnect.php");

$query = $db-> prepare("SELECT idtype, prodname, price FROM `type` INNER JOIN `product` ON type.idtype = product.typeid WHERE price < 500;");
$query->execute();
$resultq = $query->fetchALL(PDO::FETCH_ASSOC);

echo"<table>";
echo"<thead><th>categorie</th><th>productnaam</th><th>prijs</th></thead>";
echo"<tbody>";

foreach ($resultq as $data){

    echo "<tr>";    
    echo "<td>".$data["idtype"]."</td>";
    echo "<td>".$data["prodname"]."</td>";
    echo "<td>".$data["price"]."</td>";
    echo "</tr>";

}

echo"</tbody>";
echo"</table>";
    ?>
     </main>
</body>
</html>
=======
<?php
    echo "<h1>Redirecting request</h1>";
	header('Refresh: 1; url=nogniet.php');	
    exit(); 

?>
>>>>>>> 5561c4d8fb66d8dc80603e8a1f2a6c8fae97a05d
