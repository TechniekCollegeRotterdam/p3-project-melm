<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 59dfd36a3f9443a7b23cfa497e90690bad693366
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
//if(!isset($_SESSION['blogin']) || $_SESSION['blogin'] == false)
//{
  //  header(string:'location: inlogbeheer.php');
    //exit();
//}


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
<<<<<<< HEAD
</html>
=======
<?php
    echo "<h1>Redirecting request</h1>";
	header('Refresh: 2; url=nogniet.php');	
    exit(); 

?>
>>>>>>> 5561c4d8fb66d8dc80603e8a1f2a6c8fae97a05d
=======
</html>
>>>>>>> 59dfd36a3f9443a7b23cfa497e90690bad693366
