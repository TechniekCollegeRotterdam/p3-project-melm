<!DOCTYPE html>
    <html lang="nl">

    <head>
    	<meta charset="UTF-8">
    	<title> Inloggen Beheerder </title>
    	<link rel="stylesheet" type="text/css" href="company.css">
    </head>
    <ul class="navbar-nav navbar-right">
    	<li> <a href="registreren.php"> <span class="glyphicon glyphicon-user"> </span>registreren</a> </li>
    	<li> <a href="login.php"> <span class="glyphicon glyphicon-log-in"> </span>login</a> </li>
    </ul>

    <body>
    	<header>
    		<h1> Company </h1>

    		<?php
include "nav.html";

?>
    	</header>
    	<main>
    		<?php
require_once 'dbconnmelm.php';
if (isset($_POST['login'])) {
	try {
		$sQuery = "SELECT * FROM klant WHERE klantid = :klantid";
		$oStmt = $db -> prepare($sQuery);
		$oStmt -> bindValue(parameter: ':klantid', $_POST['klnr']);
		$oStmt -> execute();
		if ($oStmt -> rowCount() == 1) {
			$rij = $oStmt -> fetch(fetch_style: PDO::FETCH_ASSOC);
			if (password_verify($_POST['klww'], $rij['wachtwoord'])) {
				$_SESSION['klantid'] = $rij['klantid'];
				$_SESSION['voornaam'] = $rij['voornaam'];
				$_SESSION['achternaam'] = $rij['achternaam'];
				if ($rij['beheer'] == "J") {
					$_SESSION['blogin'] = true;
					header(string: 'Refresh: 3; url=beheerhome.php');
					echo "login succesvol";
				} else {
					$_SESSION['klogin'] = true;
					header(string: 'Refresh:3; url=mijnpagina.php');
					echo "You made me proud person who i wil never meet. login succsesvol";
				}
			} else {
				header(string: 'refresh: 4; url=inlogbeheer.php');




				echo "<div class='container'>";
				echo "<div class='panel panel-primary'>";
				echo "<div class='panel-heading'>You disapointed this entire universe! Redeem yourself.</div>";
				echo "<div class='panel-body'>YOU FREAKING DONKY! You had one job and ya blew it! Start from schratch.</div>";
				
					echo "</div>";
	 echo "</div>"; 
			}
		}
	}
}
?>
<fieldset>;
	<label for = 'emailaddress'>Email</label>;
				<input type='email' name='emailAddress' class='form-control' placeholder='Email' required>;

				<label for = 'password'>Wachtwoord</label>;
				<input type = 'password' name='password' class='form-control' placeholder='Wachtwoord' required>";

				</fieldset>;
				<br>;
				<fieldset>;
				<button class='btn btn-md btn-primary btn-block' type='login' name='inloggen'>Log in</button>;
				</fieldset>;

</main>
</body>
</html>