<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
	 <title>Info Bestelling Producten</title>
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
        
    </main>   
     <?php
    // verbinding maken met de database bieren
    require_once("dbconnmelm.php");

    // alle gegevens ophalen uit de tabel bier0
    $query = $db->prepare("SELECT idpurchase, idpurchaseline, purchasedate, productid, quantiity, purchaseid, deliverydate, clientid FROM purchaseline AND purchase");
    $query->execute();
    $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

    echo "<table>";
    echo "<thead><th>idpurchase</th>".
    "<th> idpurchaseline</th> ".
    "<th>purchasedate</th>".
    "<th>productid</th>
    </thead>";
    echo "<tbody>";

    // alle gegevens uit kroeg op het scherm tonen
    foreach ($resultq as $data) {
        echo "<tr><td>".$data["prodname"]. "</td>";
        echo "<td>".$data["proddesc"]. "</td>";
        echo "<td>".$data["origincountry"]. "</td></tr>";
    }
    echo "</tbody>";
    echo "</table>";
    ?>
</body>
</html>