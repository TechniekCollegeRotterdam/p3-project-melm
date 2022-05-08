<?php
session_start();
if(!isset($_SESSION['idclient']) || !isset($_SESSION['givenname'])) {
    header("location: index.php");
    exit();
}
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

<?php

try {	
require_once("dbconnmelm.php");
}
catch(PDOExeption $e) {
	die("Error!: " . $e->getMessage());
	}
if(isset($_POST['opslaan'])) {
	
       $name = filter_input($_POST["names"] , FILTER_SANITIZE_STRING);
	$query = $db->prepare("UPDATE types SET names = :names WHERE idtype = :idtype");

      
	$query->bindValue("names", $name);
	$query->bindValue("idtype", $_POST['idtype']);
	if ($query->execute()) {
		echo "De nieuwe gegevens zijn toegevoegd.";
	} else {
		echo "Er is een fout opgetreden!";
	}
	echo "<br>";
} else {
 $query = $db->prepare("SELECT * FROM types WHERE idtype = :idtype");
 $query->bindValue("idtype", $_POST['idtype']);
 $query->execute();
 $result = $query->fetch(PDO::FETCH_ASSOC);

$type = $result['idtype'];
$name = $result['names'];


}

?>

<br>
<br>
<br>

<form method="post" action="">
	<label>id type</label>
	<input type="text" name="idtype" value="<?php echo $type; ?>" readonly>
	<br>

	<label>name</label>
	<input type="text" name="names" value="<?php echo $name; ?>">
	<br>

	<input type="submit" name="opslaan" value="opslaan">
</form>





</body>

</html>