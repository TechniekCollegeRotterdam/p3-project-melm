<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59dfd36a3f9443a7b23cfa497e90690bad693366
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

//hieronder een overzicht van alle categorieën met een R in de naam

require_once("dbconnect.php");

$query = $db-> prepare("SELECT idtype, name FROM `type` INNER JOIN `product` ON type.idtype = product.typeid  WHERE name LIKE '%R%';");
$query->execute();
$resultq = $query->fetchALL(PDO::FETCH_ASSOC);

echo "<table>";
echo "<thead><th>Namen met een R</th><th>categorie</th></thead>";
echo "<tbody>";

foreach ($resultq as $data){
    echo "<tr>";
    echo "<td>".$data["name"]."</td>";
    echo "<td>".$data["idtype"]."</td>";
    echo "</tr>";

}

echo "</tbody>";
echo "</table>";

    ?> 
</main>    
</body>
</html>
<<<<<<< HEAD
=======
<?php
    echo "<h1>Redirecting request</h1>";
	header('Refresh: 1; url=nogniet.php');	
    exit(); 

?>
>>>>>>> 5561c4d8fb66d8dc80603e8a1f2a6c8fae97a05d
=======
>>>>>>> 59dfd36a3f9443a7b23cfa497e90690bad693366
