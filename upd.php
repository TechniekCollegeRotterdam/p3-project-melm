<?php
session_start();

if(isset($_SESSION['idclient']) && isset($_SESSION['givenname'])) {
?>
<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="UTF-8">
	<title>Update type</title>
	<link rel="stylesheet" type="text/css" href="company.css">
</head>

<body>
	<header>
		<h1>Update type</h1>

		<?php
			include "navbeheer.html";
		?>
	</header>

<br>
<br>
<br>

	
<?php 

try {
	require_once("dbconnmelm.php");

 $query = $db->prepare("SELECT * FROM types");
 $query->execute();
 $result = $query->fetchAll (PDO::FETCH_ASSOC);


 echo "<table>";
 echo "<thead><th>idtype</th><th>name</th></thead>";
 echo "<tbody>";


 foreach($result as &$data) {
	 echo "<form method='POST' action='update.php'>";
	 echo "<tr>";
     
	 echo "<td>".$data["idtype"]."<input type='hidden' name='idtype' value ='".$data["idtype"]."'></td>";
        echo "<td>".$data["names"]."<input type='hidden' name='names' value =".$data["names"]."></td>"; 
        echo "<td><input type='submit' name='wijzigen' value='wijzigen'></td>";
        echo "</tr></form>";
 }
 echo "</tbody>";
 echo "</table>";



}  catch(PDOExeption $e) {
       die("Error!!! : " . $e->getMessage());
       
}



?>

</body>

</html>
<?php
}
else {
    header("location: index.php");
    exit();
}
?>