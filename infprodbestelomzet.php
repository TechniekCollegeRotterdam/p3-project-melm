<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59dfd36a3f9443a7b23cfa497e90690bad693366
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
	 <title>Info Bestelling Producten</title>
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
require 'dbconnmelm.php';

//if(!isset($_SESSION['blogin']) || $_SESSION['blogin'] == false)
//{
  //  header(string:'location: inlogbeheer.php');
    //exit();
//}


    // alle gegevens ophalen uit de tabel bier0
    $query = $db->prepare("SELECT idpurchaseline, productid, quantity, pricecharged, purchaseid FROM purchaseline");
    $query->execute();
    $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

    echo "<table>";
    echo "<thead>
    <th> idpurchaseline</th> ".
    "<th>productid</th>".
    "<th>quantity</th>".
    "<th>pricecharged</th>".
    "<th>purchaseid</th> </thead>";
    echo "<tbody>";

    // alle gegevens uit kroeg op het scherm tonen
    foreach ($resultq as $data) {
        echo "<tr><td>".$data["idpurchaseline"]. "</td>";
        echo "<td>".$data["productid"]. "</td>";
        echo "<td>".$data["quantity"]. "</td>"; 
        echo "<td>".$data["pricecharged"]. "</td>";
        echo "<td>".$data["purchaseid"]. "</td> </tr>";
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
