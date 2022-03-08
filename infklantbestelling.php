<?php
    include "nav.html";

    require_once("dbconnect.php");

        $query = $db->prepare("SELECT idclient, surname, givenname FROM purchase INNER JOIN client ON idclient = clientid ");
        $query->execute();
        $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

        echo "<table border='1' width='800' cellspacing='0'>";
        echo "<thead><th>IdClient</th><th>Surname</th><th>Givenname</th></thead>";
        echo "<tbody>";

        foreach ($resultq as $data) {
            echo "<tr>";
            echo "<td>".$data["idclient"]."</td>";
            echo "<td>".$data["surname"]."</td>";
            echo "<td>".$data["givenname"]."</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
?>