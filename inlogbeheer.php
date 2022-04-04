<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="UTF-8">
	<title> Inloggen Beheerder </title>
	<link rel="stylesheet" type="text/css" href="company.scss">
</head>

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
if (isset($_POST["loginAdmin"])){
  try {
			$sQuery = "SELECT 'idclient', 'surname', 'givename', 'emailadress','passwrd', 'isadmin' FROM client WHERE isadmin='yes' ";
			$oStmt = $db -> prepare($sQuery);
			$oStmt -> bindValue(parameter: ':idclient', $_POST['passwrd']);
			$oStmt -> execute();
			
			if ($oStmt -> rowCount() == 1) {
				$rij = $oStmt -> fetch(fetch_style: PDO::FETCH_ASSOC);
			
				if (password_verify($_POST['passwrd'], $rij['passwrd'])) {
					$_SESSION['idclient'] = $rij['idclient'];
					$_SESSION['givenname'] = $rij['givenname'];
					$_SESSION['surname'] = $rij['surname'];
			
					if ($rij['isadmin'] == "yes") {
						$_SESSION['blogin'] = true;
						header(string: 'Refresh: 3; url=beheerhome.php');
						echo "login succesvol, welcome highranker";
					} 
					// else if ($rij['admin'] == "no"){
					//	$_SESSION['klogin'] = true;
					//	header(string: 'Refresh:3; url=klanthome.php');
					//	echo "You made me proud person who i wil never meet, OF COURSE NOT. Your Demoted from Admin to client. login succsesvol";}
					}
				
				} else {
					header(string: 'refresh: 4; url=inlogbeheer.php');
	
	
	
	
					echo "<div class='container'>";
					echo "<div class='panel panel-primary'>";
					echo "<div class='panel-heading'>You disappointed this entire universe! Redeem yourself.</div>";
					echo "<div class='panel-body'>YOU FREAKING DONKY! You had one job and ya blew it! Start from schratch.</div>";
					
						echo "</div>";
						echo "</div>"; 
				}
            }
		}
	?>
		<form>;
			<method post>
				<label for='emailaddress'>Email</label>;
				<input type='email' name='emailAddress' class='form-control' placeholder='Email' required>;

				<label for='password'>Wachtwoord</label>;
				<input type='password' name='password' class='form-control' placeholder='Wachtwoord' required>";

		</form>;
		<br>;
		<form>;
			<button class='btn' type='submit' name='button'>Log in</button>;
		</form>;
	</main>
</body>

</html>