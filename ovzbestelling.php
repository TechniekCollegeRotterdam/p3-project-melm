<!DOCTYPE html>
<html lang="nl"> 
<head>
	 <meta charset="UTF-8">
	 <title>Company</title>
	 <link rel="stylesheet" type="text/css" href="company.css">  
</head>

<body>  
	<header>
		<h1>Company</h1>
    	<!-- hieronder wordt het menu opgehaald. -->
	    <?php
	    	include "nav.html";
	    ?>
	</header>
 
	<!-- op deze pagina de informatie overzichten van de tabel purchase -->
 	<main>	
        <p></p><a href="infbestelling.php">Overzicht bestelling</a>
        <p></p><a href="infbestelmnd.php">Bestelling vorige mnd</a>
        <p></p><a href="infbesteldetails.php">Bestelling met regels</a>
        <p></p><a href="infbestelmeerdetails.php">Bestelling - &gt;2 regels</a>
        <p></p><a href="infbestelgemprijs.php">Bestelling gem prijs</a>
        <p></p><a href="infbestelvorigmnd.php">Bestellingen vorige mnd</a>
        <p></p><a href="infbesteltotaant.php">totaal aantal bestelling</a>
    </main>
	
</body>
</html>