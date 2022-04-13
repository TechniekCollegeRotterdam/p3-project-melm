<?php
session_start();

if(isset($_SESSION['idclient']) && isset($_SESSION['givenname'])) {
?>
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

	<!-- op de home pagina wat enthousiaste tekst over het bedrijf en de producten -->
	<main>

		<section>
			<article class="article-index">
				<p class="p-index"> Welkom Admin. 
					<p> Do your stuff</p>
			</article>

		</section>
	</main>
 <a href="add.php" >
Nieuwe product toevoegen</a>
</body>

</html>
<?php
}
else {
    header("location: index.php");
    exit();
}
?>