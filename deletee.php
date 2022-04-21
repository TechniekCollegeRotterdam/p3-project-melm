<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="UTF-8">
	<title>Verwijderen producten</title>
	<link rel="stylesheet" type="text/css" href="company.css">
</head>

<body>
	<header>
		<h1>Verwijderen producten</h1>

		<?php
			include "navbeheer.html";
		?>
	</header>
	<br>
	<br>
	<br>
	<br>

	<?php
    // verbinding maken met de database bieren
    session_start();
    if(isset($_POST["delete"])){
     require_once("dbconnmelm.php");   

try
{
    $query = $db->prepare("DELETE FROM client  WHERE idclient = :idcl");
    $query->bindValue(':idcl', $_POST["idclient"]);
    var_dump( $_POST["idclient"]);
   
   
     if($query->execute()){
         echo "Klant is verwijderd";

     }else{
         echo "Er is een fout opgetreden";

    }
    

}
 

catch(PDOExeption $e)
{
$sMsg = '<p>
Regelnummer: ' . $e->getLine().'<br/>
Bestand: '.$e->getFile().'<br/>
Foutmelding: '.$e->getMessage().'
</p>';

trigger_error($sMsg);


}
    }
else {
    header("location: index.php");
    exit();
}
    
   
   ?>      

</body>

</html>
<?php


?>