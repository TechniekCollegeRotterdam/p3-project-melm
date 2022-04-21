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