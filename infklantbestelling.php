<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="company.css">  
    <title>Alle klant - bestellingen</title>
</head>
<body>
    <header>
		<h1>Company</h1>
	    <!-- hieronder wordt het menu opgehaald. -->
	    <?php
		    include "nav.html";
	    ?>
	</header>
 
    <main>
    <?php
        // Verbinding maken met de database 
        require_once("dbconnect.php");

        // Geselecteerde gegevens ophalen uit de tabel client voor woonplaats Amsterdam
        $query = $db->prepare("SELECT givenname, surname, streetadress, idpurchase, purchasedate, paidamount 
                        FROM client INNER JOIN purchase ON idclient = clientid");
        $query->execute();
        $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

        echo "<table>";
        echo "<thead><th>Voornaam</th><th>Achternaam</th><th>Adres</th><th>Aankoopnummer</th>
        <th>Datum aankoop</th><th>Betaald bedrag</th></thead>";
        echo "<tbody>";

        // Alle gegevens uit client op het scherm tonen
        foreach ($resultq as $data) {
            echo "<tr>";
            echo "<td>".$data["givenname"]."</td>";
            echo "<td>".$data["surname"]."</td>";
            echo "<td>".$data["streetadress"]."</td>";
            echo "<td>".$data["idpurchase"]."</td>";
            echo "<td>".$data["purchasedate"]."</td>";
            echo "<td>".$data["paidamount"]."</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    ?>
    </main>
</body>
</html>