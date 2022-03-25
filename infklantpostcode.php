<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="company.css">  
    <title>Alle klanten op postcode</title>
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

        // Geselecteerde gegevens ophalen uit de tabel client met sortering op postcode
        $query = $db->prepare("SELECT city, surname, streetadress, zipcode 
                        FROM client ORDER BY zipcode");
        $query->execute();
        $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

        echo "<table>";
        echo "<thead><th>Woonplaats</th><th>Achternaam</th><th>Adres</th><th>Postcode</th></thead>";
        echo "<tbody>";

        // Alle gegevens uit client op het scherm tonen
        foreach ($resultq as $data) {
            echo "<tr>";
            echo "<td>".$data["city"]."</td>";
            echo "<td>".$data["surname"]."</td>";
            echo "<td>".$data["streetadress"]."</td>";
            echo "<td>".$data["zipcode"]."</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    ?>
    </main>
</body>
</html>