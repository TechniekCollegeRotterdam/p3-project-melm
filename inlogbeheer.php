<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="company.css">
</head>
<header> 
		<h1>Company</h1>
		<!-- hieronder wordt het menu opgehaald. -->
		<?php
			include "nav.html";
		?>
	</header>
<body>
    <form action="functions.php" method="post">
        <h2>Login</h2>
        <?php if(isset($_GET['error'])) { ?>
         <p class="error"> <?php echo $_GET['error']; ?></p>
       <?php } ?>
       <label>Username/Email</label>
       <input type="text" name="givenname" placeholder="Givenname/email"><br>
       <label>Password</label>
       <input type="password" name="passwrd" placeholder="Password"><br>

       <button type="submit">Login</button>
    </form>
</body>
</html>