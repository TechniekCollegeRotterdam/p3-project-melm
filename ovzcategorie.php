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
 
	<!-- op deze pagina de informatie overzichten van de tabel type -->
 	<main>
        <p>Klik hieronder om een overzicht van alle categorieën van de producten te krijgen.<br>
        <a href="infcategorie.php">Overzicht categorieën</a></p>

        <p>Klik hieronder om een overzicht van alle categorieën met een &quot;a&quot; in de 
           naam te krijgen.<br>
        <a href="infcatmeta.php">Categorie met a</a></p>

        <p>Klik hieronder om een overzicht van categorieën met bijbehorende producten te 
            krijgen.<br>
        <a href="infcatproduct.php">Categorie met product</a></p>

        <p>Klik hieronder om een overzicht van categorieën met producten boven &euro; 100,-- 
            te krijgen.<br>
        <a href="infcatprodprijs.php">Categorie - prod &euro; 100</a></p>

        <p>Klik hieronder om een overzicht van de gemiddelde productprijs per categorie 
            te krijgen.<br>
        <a href="infcatavgprodprice.php">Categorie - gem. prodprijs</a></p>

        <p>Klik hieronder om een overzicht van categorieën met ALLE bijbehorende producten 
            te krijgen.<br>
        <a href="infcatallprod.php">Categorie met alle producten</a></p>

        <p>Klik hieronder om een overzicht van categorieën met producten beneden de &euro; 5 
            te krijgen.<br>
        <a href="infcatprodklprijs.php">Categorie - prod &euro; 5</a></p>
    </main>
	
</body>
</html>