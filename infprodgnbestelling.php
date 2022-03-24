<?php
session_start();
require 'admincheck.php';
require 'dbconnmelm.php';
?>
<?php 
if(!isset($_SESSION['blogin']) || $_SESSION['blogin'] == false)
{
    header(string:'location: inlogbeheer.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
	 <title>Info Producten ZonderProducten</title>
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

// moet nog laten zien producten zonder bestellinge



    $query = $db->prepare("SELECT idpurchase, paidamount, clientid FROM purchase WHERE paidamount = 000 "); //paidinfulldate, deliverydate,
    $query->execute();
    $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

    echo "<table>";
    echo "<thead><th>idpurchase</th>".
    "<th> paidamount</th> ".
    //"<th>Paidinfulldate</th>".
    //"<th>deliverydate</th>".
    "<th>clientid</th></thead>";
    echo "<tbody>";


    foreach ($resultq as $data) {
        echo "<tr><td>".$data["idpurchase"]. "</td>";
        echo "<td>".$data["paidamount"]. "</td>";
        //echo "<td>".$data["paidinfulldate"]. "</td>";
        //echo "<td>".$data["deliverydate"]. "</td>";
        echo "<td>".$data["clientid"]. "</td> </tr>";
    }
    echo "</tbody>";
    echo "</table>";
    ?>
</body>
</html>