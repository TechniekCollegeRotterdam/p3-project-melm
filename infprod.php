<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
	 <title>Info Producten</title>
	 <link rel="stylesheet" type="text/css" href="company.css">  
</head>
<body>
<header>
		<h1>Company</h1>
    
	    <?php
	    	include "nav.html";
	    ?>
	</header>
    <main>
    <?php
    // verbinding maken met de database bieren
    require_once("dbconnmelm.php");

    // alle gegevens ophalen uit de tabel bier0
    $query = $db->prepare("SELECT prodname, proddesc, origincountry, price FROM product");
    $query->execute();
    $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

    echo "<table>";
    echo "<thead><th>prodname product</th>".
    "<th> proddesc product </th> ".
    "<th>origincountry</th>".
    "<th>price product</th></thead>";
    echo "<tbody>";

    // alle gegevens uit kroeg op het scherm tonen
    foreach ($resultq as $data) {
        echo "<tr><td>".$data["prodname"]. "</td>";
        echo "<td>".$data["proddesc"]. "</td>";
        echo "<td>".$data["origincountry"]. "</td>";
        echo "<td>".$data["price"]. "</td></tr>";
    }
    echo "</tbody>";
    echo "</table>";
    ?>      
    </main>   

</body>
</html>

<?php
    echo "<h1>Redirecting request</h1>";
	header('Refresh: 1; url=nogniet.php');	
    exit(); 

?>
