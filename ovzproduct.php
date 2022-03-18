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
 
	<!-- op deze pagina de informatie overzichten van de tabel product -->
 	<main>
        <p></p><a href="infprod.php">Overzicht producten</a>
        <p></p><a href="infprodlaagprijs.php">Producten lage prijs</a>
        <p></p><a href="infprodbestelling.php">Producten - bestellingen</a>
        <p></p><a href="infprodgnbestelling.php">Producten zonder bestellingen</a>
        <p></p><a href="infprodgemprijs.php">Producten gem prijs</a>
        <p></p><a href="infprodbestelomzet.php">Producten - bestelomzet</a>
        <p></p><a href="infprodtype.php">Producten - type</a>
    </main>
	
</body>
</html>