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
                $sqlUitlezen = mysqli_query($MySQL, "SELECT * FROM 'client'")
				$sqlAantal = musqli_num_rows($sqlUitlezen);

				if ($sqlAantal == 0) {
                 while ($sqlData = mysqli_fetch_assoc($sqlUitlezen)){

					$_SEESION['login'] = $sqlData['gebruikerNaam']
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