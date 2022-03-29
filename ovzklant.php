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
 
	<!-- op deze pagina de informatie overzichten van de tabel client -->
 	<main>
        <p>Een overzicht van al onze klanten:<br><a href="infklant.php">Roep dit overzicht op</a></p>
        <p>Een overzicht van alle klanten per woonplaats:<br><a href="infklantwpl.php">Roep dit overzicht op</a></p>
        <p>Een overzicht van alle klanten met hun bestellingen:<br><a href="infklantbestelling.php">Roep dit overzicht op</a></p>
        <p>Een overzicht van alle klanten, die geen bestelling hebben geplaatst:<br><a href="infklantgeenbestelling.php">Roep dit overzicht op</a></p>
        <p>Een overzicht van de klanten met hun grootste bestelling:<br><a href="infklantmaxbestelling.php">Roep dit overzicht op</a></p>
        <p>Een overzicht van alle klanten gesorteerd op postcode:<br><a href="infklantpostcode.php">Roep dit overzicht op</a></p>
        <p>Een overzicht van het aantal klanten per woonplaats:<br><a href="infklantperwpl.php">Roep dit overzicht op</a></p>
    </main>
	
</body>
</html>
