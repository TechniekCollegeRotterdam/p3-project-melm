<?php
session_start();

if(isset($_SESSION['idclient']) && isset($_SESSION['givenname'])) {
    ?>

    <!DOCTYPE html> 
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>admin home</title>
        <link rel="stylesheet" type="text/css" href="company.css">
    </head>
    <body>
       
       <header>
		
		<?php
			include "navbeheer.html";
		?>
	</header>
    <h1>Welcome admin, <?php echo $_SESSION['givenname']; ?></h1>
       <a href="gamble2.php">Logout</a>
    </body>
    </html>

    <?php
}
else {
    header("location: index.php");
    exit();
}
?>