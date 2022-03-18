<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
	 <title>Info Producten</title>
	 <link rel="stylesheet" type="text/css" href="company.scss">  
</head>
<body>
<header>
		<h1>Company</h1>
    
	    <?php
	    	include "nav.html";
	    ?>
	</header>
    <main>
       <?php
    // verbinding maken met de database bieren
    require_once("dbconnmelm.php");

    // alle gegevens ophalen uit de tabel bier0
    $query = $db->prepare("SELECT prodname, proddesc, origincountry, price FROM product");
    $query->execute();
    $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

    echo "<table>";
    echo "<thead><th>prodname product</th>".
    "<th> proddesc product </th> ".
    "<th>origincountry</th>".
    "<th>price product</th></thead>";
    echo "<tbody>";

    // alle gegevens uit kroeg op het scherm tonen
    foreach ($resultq as $data) {
        echo "<tr>".$data["prodname"]. "</td>";
        echo "<td>".$data["proddesc"]. "</td>";
        echo "<td>".$data["origincountry"]. "</td>";
<<<<<<< HEAD
        echo "</tr>";
=======
        echo "<td>".$data["price"]. "</td></tr>";
>>>>>>> 0452e7a06197b17514cabf9ae5b751685b099ff5
    }
    echo "</tbody>";
    echo "</table>";
    ?>      
    </main>   

</body>
</html>