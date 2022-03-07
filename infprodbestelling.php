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
    $query = $db->prepare("SELECT idpurchase, idpurchaseline, purchasedate, productid, quantity, purchaseid, deliverydate, clientid FROM purchaseline OR purchase");
    $query->execute();
    $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

    echo "<table>";
    echo "<thead><th>idpurchase</th>".
    "<th> idpurchaseline</th> ".
    "<th>purchasedate</th>".
    "<th>productid</th>".
    "<th>quantity</th>".
    "<th>purchaseid</th>". 
    "<th>deliverydate</th>". 
    "<th>clientid</th></thead>";
    echo "<tbody>";

    // alle gegevens uit kroeg op het scherm tonen
    foreach ($resultq as $data) {
        echo "<tr><td>".$data["idpurchase"]. "</td>";
        echo "<td>".$data["idpurchaseline"]. "</td>";
        echo "<td>".$data["purchasedate"]. "</td>";
        echo "<td>".$data["productid"]. "</td>";
        echo "<td>".$data["quantity"]. "</td>";
        echo "<td>".$data["puchaseid"]. "</td>";
        echo "<td>".$data["deliverydate"]. "</td>";
        echo "<td>".$data["clientid"]. "</td> </tr>";
    }
    echo "</tbody>";
    echo "</table>";
    ?>
</body>
</html>