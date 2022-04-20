<?php
session_start();

if(isset($_SESSION['idclient']) && isset($_SESSION['givenname'])) {
?>
<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="UTF-8">
	<title>Wijzigen</title>
	<link rel="stylesheet" type="text/css" href="company.css">
</head>

<body>
	<header>
		<h1>Wijzigen producten</h1>

		<?php
			include "navbeheer.html";
		?>
	</header>

</body>

</html>
<?php
}
else {
    header("location: index.php");
    exit();
}
?>