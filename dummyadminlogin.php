<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="company.css">  
    <title>Alle beheerders</title>
</head>
<body>
    <header>
		<h1>Company</h1>
	    <!-- hieronder wordt het menu opgehaald. -->
	    <?php
            session_start();
            include "nav.html";
	    ?>
	</header>

    <main>
    <?php
        // Verbinding maken met de database 
        require_once("dbconnect.php");

        // Geselecteerde gegevens ophalen uit de tabel client
        $query = $db->prepare("SELECT idclient, givenname, surname, city, isadmin 
                FROM client WHERE isadmin = 'yes'");//AND passwrd ='$2y$10$OQV1.K/z' AND (emailadress = OR givenname = )
        $query->execute();
        $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

        echo "<table>";
        echo "<thead><th>Klantnr</th><th>Voornaam</th><th>Achternaam</th>
                <th>Woonplaats</th><th>Beheerder</th><th>Inloggen</th></thead>";
        echo "<tbody>";

        // Alle gegevens uit client op het scherm tonen
        foreach ($resultq as $data) {
            echo "<form method='POST' action='dummyloginproces.php'>";
            echo "<tr>";
            echo "<td>".$data["idclient"]."<input type='hidden' name='idclient' value =".$data["idclient"]."></td>";
            echo "<td>".$data["givenname"]."<input type='hidden' name='givenname' value =".$data["givenname"]."></td>";
            echo "<td>".$data["surname"]."<input type='hidden' name='surname' value =".$data["surname"]."></td>";
            echo "<td>".$data["city"]."</td>";
            echo "<td>".$data["isadmin"]."</td>";
            echo "<td><input type='submit' name='LogInAdmin' value='Inloggen'></td>";
            echo "</tr></form>";
        }
        echo "</tbody>";
        echo "</table>";
    ?>
    </main>
</body>
</html>