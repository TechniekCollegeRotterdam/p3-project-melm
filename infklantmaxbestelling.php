<?php

include "nav.html";

require_once("dbconnect.php");

        $query = $db->prepare("SELECT productid, COUNT(productid) FROM purchaseline");
         $query->execute();
        $resultq = $query->fetchAll(PDO::FETCH_ASSOC);


        echo "<table border='1' width='800' cellspacing='0'>";
        echo "<thead><th>ProductId</th></thead>";
        echo "<tbody>";


        foreach ($resultq as $data) {
            echo "<tr>";
            echo "<td>".$data["productid"]."</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";



?>