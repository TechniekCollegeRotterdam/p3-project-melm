<?php
    
    include "nav.html";


    require_once("dbconnect.php");

        $query = $db->prepare("SELECT city, COUNT(idclient) as qty FROM client GROUP BY city ");
        $query->execute();
        $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

        echo "<table border='1' width='800' cellspacing='0'>";
        echo "<thead><th>city</th><th>countryid</th></thead>";
        echo "<tbody>";


        foreach ($resultq as $data) {
            echo "<tr>";
            echo "<td>".$data["city"]."</td>";
            echo "<td>".$data["qty"]."</td>";
            echo "</tr>";
        }


            echo "</tbody>";
            echo "</table>";



?>