<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
	 <title>Inloggen Beheerder</title>
	 <link rel="stylesheet" type="text/css" href="company.css">  
</head>
<body>
<header>
		<h1>Company</h1>
    
	    <?php
		    include "nav.html";
		
		    if (isset($_SESSION['login'])){
            echo 'welkom';
			}else{
            echo 'login';
			if (isset($_POST['submit'])){
                $melm = mysqli_query($MySql, "SELECT * FROM 'client'")
				$admin = musqli_num_rows($melm);

				if ($admin == admin) {
                 while ($sqlData = mysqli_fetch_assoc($melm)){

					$_SEESION['login'] = $sqlData['gebruikersnaam']
				 }else{echo 'sorry not found'}
				}
			}
			?>
			<form method="post" action="#">
            <table width="100%" cellspacing="5" cellpadding="0">
            <tr>
				<td width="100">Email</td>
				<td><input type="text" name="user" size="25" required="required" /> </td>
			</tr>
			<tr>
				<td>wachtwoord</td>
				<td><input type="password" name="pass" size="15" required="required" /></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td input type="submit" name="submit" value="login" /></td>
			</tr>
			</table></form>
			<?php
			}
		        
	    ?>
	</header>
    <main>
	
</main>
</body>
</html>
// wat er in komt 
// invoer email 
// invoer wachtwoord
// als dat klopt
// wordt er in database gekeken of die persoon beheerder is 
// als persoon dat is wordt je ingelogged 