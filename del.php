<?php
session_start();

if(isset($_SESSION['idclient']) && isset($_SESSION['givenname'])) {
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Verwijderen producten</title>
    <link rel="stylesheet" type="text/css" href="company.css">
</head>

<body>
    <header>
        <h1>Verwijderen klant</h1>

        <?php
			include "navbeheer.html";
		?>
    </header>
    <br>
    <br>
    <br>
    <br>

    <?php
    // verbinding maken met de database bieren
    require_once("dbconnmelm.php");

    // alle gegevens ophalen uit de tabel bier0
    $query = $db->prepare("SELECT idclient, surname, givenname  FROM client;");
    $query->execute();
    $resultq = $query->fetchAll(PDO::FETCH_ASSOC);


    echo "<table>";
    echo "<thead><th>idclient</th><th>surname</th><th>givenname</th><th>delete</th></thead>";
    echo "<tbody>";

    // alle gegevens uit kroeg op het scherm tonen
    foreach ($resultq as $data) {
        echo "<form method='POST' action='delete.php'>";
	    echo "<tr>";
        echo "<td>".$data["idclient"]."<input type='hidden' name='idclient' value ='".$data["idclient"]."'></td>";
        echo "<td>".$data["surname"]."<input type='hidden' name='surname' value =".$data["surname"]."></td>"; 
        echo "<td>".$data["givenname"]."<input type='hidden' name='givenname' value =".$data["givenname"]."></td>";
        echo "<td><input type='submit' name='delete' value='delete'></td>";
        echo "</tr></form>";

    }

    echo "</tbody>";
    echo "</table>";

    ?>

</body>

</html>
<?php
}
else {
    header("location: index.php");
    exit();
}
?>