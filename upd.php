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

<?php 

try {
$db = new PDO("mysql:host=localhost;dbname=melm",
 "root", "root");

 $query = $db->prepare("SELECT * FROM type");
 $query->execute();
 $result = $query->getchAll (PDO::FETCH_ASSOC);

 foreach($result as &$data) {
        echo "<a href='update.php?id=".$data['id']."'>";
        echo $data["merk"] . " " . $data["type"];
        echo "</a>";
        echo "<br>";
 }
}  catch(PDOExeption $e) {
       die("Error!: " . $e->getMessage());
       
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