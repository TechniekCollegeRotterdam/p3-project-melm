<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 59dfd36a3f9443a7b23cfa497e90690bad693366
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
	 <title>Product laag prijs</title>
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

    // alle gegevens ophalen uit de tabel bier0
    $query = $db->prepare("SELECT prodname, idproduct, typeid, idtype, name FROM product, type");
    $query->execute();
    $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

    echo "<table>";
    echo "<thead><th>prodname product</th>".
    "<th> idproduct </th> ".
    "<th>typeid</th>". 
    "<th> idtype </th>". 
    "<th> name type </th></thead>";
    echo "<tbody>";

    // alle gegevens uit kroeg op het scherm tonen
    foreach ($resultq as $data) {
        echo "<tr><td>".$data["prodname"]. "</td>";
        echo "<td>".$data["idproduct"]. "</td>";
        echo "<td>".$data["typeid"]. "</td>";
        echo "<td>".$data["idtype"]. "</td>";
        echo "<td>".$data["name"]. "</td> </tr>";
    }
    echo "</tbody>";
    echo "</table>";
    ?>
</body>
</html>
<<<<<<< HEAD
=======
<?php
    echo "<h1>Redirecting request</h1>";
	header('Refresh: 2; url=nogniet.php');	
    exit(); 

?>
>>>>>>> 5561c4d8fb66d8dc80603e8a1f2a6c8fae97a05d
=======
>>>>>>> 59dfd36a3f9443a7b23cfa497e90690bad693366
