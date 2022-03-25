<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="company.css">  
    <title>Grootste bestelling per klant</title>
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
        $query = $db->prepare("SELECT surname, streetadress, city, MAX(paidamount) AS maxpaid 
                        FROM client INNER JOIN purchase ON idclient = clientid 
                        GROUP BY idclient ORDER BY maxpaid DESC");
        $query->execute();
        $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

        echo "<table>";
        echo "<thead><th>Achternaam</th><th>Adres</th><th>Woonplaats</th><th>Grootste betaling</th></thead>";
        echo "<tbody>";

        // Alle gegevens uit client op het scherm tonen
        foreach ($resultq as $data) {
            echo "<tr>";
            echo "<td>".$data["surname"]."</td>";
            echo "<td>".$data["streetadress"]."</td>";
            echo "<td>".$data["city"]."</td>";
            echo "<td>".$data["maxpaid"]."</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    ?>
    </main>
</body>
</html>