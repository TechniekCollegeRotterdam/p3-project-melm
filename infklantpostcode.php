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
require_once("dbconnect.php");

        $query = $db->prepare("SELECT idclient, surname, givenname, zipcode, city, countryid FROM client ORDER BY zipcode");
        $query->execute();
        $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

        echo "<table border='1' width='800' cellspacing='0'>";
        echo "<thead><th>IdClient</th><th>Surname</th><th>Givenname</th><th>streetadress</th><th>city</th><th>countryid</th></thead>";
        echo "<tbody>";


        foreach ($resultq as $data) {
            echo "<tr>";
            echo "<td>".$data["idclient"]."</td>";
            echo "<td>".$data["surname"]."</td>";
            echo "<td>".$data["givenname"]."</td>";
            echo "<td>".$data["zipcode"]."</td>";
            echo "<td>".$data["city"]."</td>";
            echo "<td>".$data["countryid"]."</td>";


            echo "</tr>";
        }


            echo "</tbody>";
            echo "</table>";


?>